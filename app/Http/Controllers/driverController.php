<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\models\car;
use App\models\driver;

class driverController extends Controller
{
    public function create(){
        return view('insertDriver');
    }

    public function store(){
        $r=request();
        $image=$r->file('driverPhoto');
        $image->move('img',$image->getClientOriginalName());
        //image is the location
        $imageName=$image->getClientOriginalName();
        $addDriver=driver::create([
            'ID'=>$r->DriverID,
            'Name'=>$r->Name,
            'Gender'=>$r->Gender,
            'IC'=>$r->IC,
            'driverPhoto'=>$imageName,
            'DrivingLicNo'=>$r->DrivingLicNo,
            'Email'=>$r->Email,
            'phoneNo'=>$r->phoneNo,
            'adddress'=>$r->adddress,
            'status'=>$r->status,
        ]);

        $addCar=car::create([
            'ID'=>$r->ID,
            'DriverID'=>$r->DriverID,
            'platNo'=>$r->platNo,
            'Brand'=>$r->Brand,
            'model'=>$r->model,
            'manufacturerYear'=>$r->manufacturerYear,
            'colour'=>$r->colour,
            'roadTax'=>$r->roadTax,
            'insurance'=>$r->insurance,
        ]);
            Session::flash('success',"Driver Information create succesful!");
        Return redirect()->route('all.Driver');
    }

    public function showlist(){
        $list=DB::table('drivers')
        ->select('drivers.*')
        ->get();
        return view('listDriver')->with('Lists',$list);
    }

    public function delete($ID){
        DB::delete('delete from drivers where id = ?',[$ID]);
        DB::delete('delete from cars where DriverID = ?',[$ID]);
        Session::flash('success',"Driver and Car Information Delete succesful!");
        return redirect()->route('all.Driver');
    }

    public function showDetail($ID){
        $driver=DB::table('drivers')
        ->leftjoin('cars', 'cars.DriverID', '=', 'drivers.ID')
        ->select('cars.*', 'drivers.*')
        ->where('drivers.ID','=',$ID)
        ->get();   
        return view('driverInfor')->with('drivers',$driver);
    }

    public function edit($ID)
    {
        $driver=DB::table('drivers')
        ->leftjoin('cars', 'cars.DriverID', '=', 'drivers.ID')
        ->select('cars.*', 'drivers.*')
        ->where('drivers.ID','=',$ID)
        ->get();   
        return view('editInfor')->with('drivers',$driver);
    }

    public function update(){
        $r=request();
        $DriverID=$r->DriverID;
        if ($r->file('NewdriverPhoto')!='') {
            $image=$r->file('NewdriverPhoto');        
            $image->move('img',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName();
        }else {
            $imageName=$r->driverPhoto;
        }
        $img = $imageName;
        $DrivingLicNo=$r->DrivingLicNo;
        $manufacturerYear=$r->manufacturerYear;
        $Email=$r->Email;
        $phoneNo=$r->phoneNo;
        $adddress=$r->adddress;
        $status=$r->status;
        DB::update('update drivers set DrivingLicNo = ?, Email = ?, phoneNo = ?, driverPhoto = ?, adddress = ?, Status = ? where ID = ?',[$DrivingLicNo,$Email,$phoneNo,$img,$adddress,$status,$DriverID]);

        $platNo=$r->platNo;
        $Brand=$r->Brand;
        $model=$r->model;
        $colour=$r->colour;
        $roadTax=$r->roadTax;
        $insurance=$r->insurance;
        DB::update('update cars set platNo = ?, Brand = ?, model = ?, colour = ?, roadTax = ?, insurance = ? ,manufacturerYear = ? where DriverID = ?',[$platNo,$Brand,$model,$colour,$roadTax,$insurance,$manufacturerYear,$DriverID]);
        Session::flash('success',"Driver Information Update succesful!");
        return redirect()->route('all.Driver');
    }
}
