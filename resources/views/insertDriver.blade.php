@extends('layouts.app')
@section('content')
<script>
@if(Session::has('success'))
	toastr.success('{{ Session::get('success')}}')
@endif
</script>
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success')}}
    </div>
@endif
<form class="subform"  method="post" action="{{ route('addDriver.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <label for="DriverID" class="label">Driver ID</label>
                    <input type="text" name="DriverID" id="DriverID" placeholder="1">
                </p>
                <p>
                    <label for="Name" class="label">Driver Name</label>
                    <input type="text" name="Name" id="Name">
                </p>
                <p>
                    <label for="Gender" class="label">Driver Gender</label>
                    <input type="text" name="Gender" id="Gender" placeholder="M / F">
                </p>
                <p>
                    <label for="IC" class="label">Driver IC</label>
                    <input type="text" name="IC" id="IC">
                </p>
                <p>
                    <label for="DrivingLicNo" class="label">Driver Driving Licanse No</label>
                    <input type="text" name="DrivingLicNo" id="DrivingLicNo" placeholder="1234">
                </p>
                <p>
                    <label for="Email" class="label">Driver Email</label>
                    <input type="email" name="Email" id="Email">
                </p>
                <p>
                    <label for="phoneNo" class="label">Driver PhoneNo</label>
                    <input type="text" name="phoneNo" id="phoneNo" placeholder="01X-XXXXXXXX">
                </p>
                <p>
                    <label for="adddress" class="label">Driver Address</label>
                    <input type="text" name="adddress" id="adddress" placeholder="0001">
                </p>
                <p>
                    <label for="driverPhoto" class="label">Driver Photo</label>
                    <input type="file" name="driverPhoto" id="driverPhoto">
                </p>
                <p>
                    <label for="status" class="label">Driver Status</label>
                    <input type="text" name="status" id="status">
                </p>
            </div>
            <div class="col">
                <p>
                    <label for="ID" class="label">Car ID</label>
                    <input type="text" name="ID" id="ID" placeholder="1001">
                </p>
                <p>
                    <label for="platNo" class="label">Car PlatNo</label>
                    <input type="text" name="platNo" id="platNo">
                </p>
                <p>
                    <label for="Brand" class="label">Car Brand</label>
                    <input type="text" name="Brand" id="Brand">
                </p>
                <p>
                    <label for="model" class="label">Car Model</label>
                    <input type="text" name="model" id="Model">
                </p>
                <p>
                    <label for="manufacturerYear" class="label">Car Manufacturer Year</label>
                    <input type="text" name="manufacturerYear" id="manufacturerYear">
                </p>
                <p>
                    <label for="colour" class="label">Car Colour</label>
                    <input type="text" name="colour" id="colour">
                </p>
                <p>
                    <label for="roadTax" class="label">Car Road Tax</label>
                    <input type="text" name="roadTax" id="roadTax">
                </p>
                <p>
                    <label for="insurance" class="label">Car Insurance</label>
                    <input type="text" name="insurance" id="insurance">
                </p>
            </div>
        </div>
        <div class="row" style="padding-left: 430px;">
            <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
    </div>
</form>
@endsection