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
<div class="container">
    <div class="row">
        <div class="col">
            Driver ID
        </div>
        <div class="col">
            Driver Name
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <br><br>
    @foreach($Lists as $list)
    <div class="row">
        <div class="col">
            {{$list->ID}}
        </div>
        <div class="col">
            <a href="{{ route('driver.detail', ['ID' => $list->ID]) }}">{{$list->Name}}</a>
        </div>
        <div class="col">
            <a href="{{ route('edit.driver', ['ID' => $list->ID]) }}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
        </div>
        <div class="col">
            <a href="{{ route('delete.driver', ['ID' => $list->ID]) }}" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash"></i>Delete</a>
        </div>
    </div>
    <br><br>
    @endforeach
</div>
@endsection