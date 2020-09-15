@extends('layouts.app')
@section('content')
@foreach($drivers as $infor)
<form class="subform"  method="post" action="{{ route('editDriver.update') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <label for="DriverID" class="label">Driver ID</label>
                    <input type="text" name="DriverID" id="DriverID" value="{{$infor->ID}}" readonly>
                </p>
                <p>
                    <label for="Name" class="label">Driver Name</label>
                    <input type="text" name="Name" id="Name" value="{{$infor->Name}}" readonly>
                </p>
                <p>
                    <label for="Gender" class="label">Driver Gender</label>
                    <input type="text" name="Gender" id="Gender" value="{{$infor->Gender}}" readonly>
                </p>
                <p>
                    <label for="IC" class="label">Driver IC</label>
                    <input type="text" name="IC" id="IC" value="{{$infor->IC}}" readonly>
                </p>
                <p>
                    <label for="DrivingLicNo" class="label">Driver Driving Licanse No</label>
                    <input type="text" name="DrivingLicNo" id="DrivingLicNo" value="{{$infor->DrivingLicNo}}">
                </p>
                <p>
                    <label for="Email" class="label">Driver Email</label>
                    <input type="email" name="Email" id="Email" value="{{$infor->Email}}">
                </p>
                <p>
                    <label for="phoneNo" class="label">Driver PhoneNo</label>
                    <input type="text" name="phoneNo" id="phoneNo" value="{{$infor->phoneNo}}">
                </p>
                <p>
                    <label for="adddress" class="label">Driver Address</label>
                    <input type="text" name="adddress" id="adddress" value="{{$infor->adddress}}">
                </p>
                <p>
                    <label for="NewdriverPhoto" class="label">Driver Photo</label>
                    <input type="hidden" name="driverPhoto" value="{{$infor->driverPhoto}}">
                    <input type="file" name="NewdriverPhoto" id="NewdriverPhoto">
                </p>
                <p>
                    <label for="status" class="label">Driver Status</label>
                    <input type="text" name="status" id="status" value="{{$infor->Status}}">
                </p>
            </div>
            <div class="col">
                <p>
                    <label for="ID" class="label">Car ID</label>
                    <input type="text" name="ID" id="ID" value="{{$infor->ID}}" readonly>
                </p>
                <p>
                    <label for="platNo" class="label">Car PlatNo</label>
                    <input type="text" name="platNo" id="platNo" value="{{$infor->platNo}}">
                </p>
                <p>
                    <label for="Brand" class="label">Car Brand</label>
                    <input type="text" name="Brand" id="Brand" value="{{$infor->Brand}}">
                </p>
                <p>
                    <label for="model" class="label">Car Model</label>
                    <input type="text" name="model" id="model" value="{{$infor->model}}">
                </p>
                <p>
                    <label for="manufacturerYear" class="label">Car Manufacturer Year</label>
                    <input type="text" name="manufacturerYear" id="manufacturerYear" value="{{$infor->manufacturerYear}}">
                </p>
                <p>
                    <label for="colour" class="label">Car Colour</label>
                    <input type="text" name="colour" id="colour" value="{{$infor->colour}}">
                </p>
                <p>
                    <label for="roadTax" class="label">Car Road Tax</label>
                    <input type="text" name="roadTax" id="roadTax" value="{{$infor->roadTax}}">
                </p>
                <p>
                    <label for="insurance" class="label">Car Insurance</label>
                    <input type="text" name="insurance" id="insurance" value="{{$infor->insurance}}">
                </p>
            </div>
        </div>
        <div class="row" style="padding-left: 430px;">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endforeach
@endsection