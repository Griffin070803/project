@extends('admin-master')
@section('content')
@section('module', 'Information')
@section('action', 'Edit')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{route('updateEdit',['id'=>$product->id])}}" enctype="multipart/form-data">
@csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit</h3>
        </div>
        <div class="card-body">
            <label>FullName</label>
            <input type="text" name="fullname" class="form-control" value="{{$product->fullname}}">
        </div>
        <div class="form-group card-body">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{$product->email}}">
        </div>

        <div class="form-group card-body">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control"  value="{{$product->phone}}">
        </div>

        <div class="form-group card-body">
            <label>Address</label>
            <input type="text" name="address" class="form-control"  value="{{$product->address}}">
        </div>

        <div class="form-group card-body">
            <label>Adult</label>
            <input type="text" name="adult" id="adult" class="form-control qty1"  value="{{$product->adult}}">
        </div>

        <div class="form-group card-body">
            <label>Children</label>
            <input type="text" name="children" id="children" class="form-control qty1"  value="{{$product->children}}">
        </div>
        <div style="display:none" id="gia-tien">{{$event->price}}</div>
        <div style="margin:15px" id ="so-tien-nguoi-lon"></div>
        <div style="margin:15px" id ="so-tien-tre-em"></div>
        <div style="margin:15px" id ="so-tien-moi"></div>
        <div class="card-body">
            <button type="submit"class="btn btn-info">Edit</button>
            <button type="reset" class="btn btn-default float-right">Reset</button>
        </div>
    </div>
</form>
@endsection