@extends('layouts.app')
@section('content')
@foreach($drivers as $infor)
<div class="container">
    <div class="row">
        <div class="col">
            <p>
                <label for="DriverID" class="label">Driver ID: {{$infor->ID}}</label>
            </p>
            <p>
                <label for="Name" class="label">Driver Name: {{$infor->Name}}</label>
            </p>
            <p>
                <label for="Gender" class="label">Driver Gender: {{$infor->Gender}}</label>
            </p>
            <p>
                <label for="IC" class="label">Driver IC: {{$infor->IC}}</label>
            </p>
            <p>
                <label for="DrivingLicNo" class="label">Driver Driving Licanse No: {{$infor->DrivingLicNo}}</label>
            </p>
            <p>
                <label for="Email" class="label">Driver Email: {{$infor->Email}}</label>
            </p>
            <p>
                <label for="phoneNo" class="label">Driver PhoneNo: {{$infor->phoneNo}}</label>
            </p>
            <p>
                <label for="adddress" class="label">Driver Address: {{$infor->adddress}}</label>
            </p>
            <p>
                <label for="driverPhoto" class="label">Driver Photo: {{$infor->driverPhoto}}</label>
                <!-- <img src="{{ asset('img/')}}/{{$infor->driverPhoto}}" alt="" height="10%"> -->
            </p>
            <p>
                <label for="status" class="label">Driver Status: {{$infor->Status}}</label>
            </p>
        </div>
        <div class="col">
            <p>
                <label for="ID" class="label">Car ID: {{$infor->ID}}</label>
            </p>
            <p>
                <label for="platNo" class="label">Car PlatNo: {{$infor->platNo}}</label>
            </p>
            <p>
                <label for="Brand" class="label">Car Brand: {{$infor->Brand}}</label>
            </p>
            <p>
                <label for="model" class="label">Car Model: {{$infor->model}}</label>
            </p>
            <p>
                <label for="manufacturerYear" class="label">Car Manufacturer Year: {{$infor->manufacturerYear}}</label>
            </p>
            <p>
                <label for="colour" class="label">Car Colour: {{$infor->colour}}</label>
            </p>
            <p>
                <label for="roadTax" class="label">Car Road Tax: {{$infor->roadTax}}</label>
            </p>
            <p>
                <label for="insurance" class="label">Car Insurance: {{$infor->insurance}}</label>
            </p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection