<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $fillable=['ID','Name','Gender','IC','DrivingLicNo','Email','phoneNo','adddress','driverPhoto','status'];
    public function driver(){
        return $this->belongsTo('App\Models\driver');
    }
}
