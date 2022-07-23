@extends('admin.master')
@section('content')
@section('module', 'Event')
@section('action', 'Create')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{route('admin.event.store')}}" enctype="multipart/form-data">
@csrf
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Event -- Create</h3>
    </div>
    <div class="form-group card-body">
            <label>Name</label>
            <input type="text" name="name" class="form-control" id="" value="{{old('name')}}">
    </div>
    <div class="form-group card-body">
        <label>Image</label>
        <input type="file" name="image" class="form-control" id="customFile" style="height:100%"> 
    </div>
    <div class="form-group card-body">
        <label>Schedule</label>
        <textarea  class="form-control" name="schedule" id="ckeditor">{{old('schedule')}}</textarea>
    </div>
    <div class="form-group card-body">
            <label>Details</label>
            <textarea  class="form-control" name="details" id="ckeditor1">{{old('details')}}</textarea>
    </div>
    <div class="form-group card-body">
        <label>Time Start</label>
        <input type="datetime-local" name="timestart" class="form-control" value="{{old('timestart')}}">
    </div>
    <div class="form-group card-body">
        <label>Time End</label>
        <input type="datetime-local" name="timeend" class="form-control" value="{{old('timeend')}}">
    </div>
    <div class="form-group card-body">
        <label>Slot</label>
        <input type="text" name="slot" class="form-control" value="{{old('slot')}}">
    </div>
    <div class="form-group card-body">
            <label>Price</label>
            <input type="text" name="price" class="form-control" value="{{old('price')}}">
    </div>
    <div class="form-group card-body">
        <label>Categorys_id</label>
        <select name="categorys_id" class="form-control">
            <option value="">--ROOT--</option>
            {{list_categories (($categories),0)}}
        </select>
    </div>
    <div class="card-body">
        <button type="submit" class="btn btn-info">Add</button>
        <button type="reset" class="btn btn-default float-right">Delete</button>
    </div>
</div>
</form>
</div>
@endsection