@extends('admin.master')
@section('content')
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
    <div class="form-group  card-body">
        <label >Image</label>
        <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose File</label>
        </div>
    </div>
    <div class="form-group card-body">
            <label>Details</label>
            <textarea  class="form-control" name="details" >{{old('details')}}</textarea>
    </div>
    <div class="form-group card-body">
        <label>Time</label>
        <input type="date" name="time"  value="2022-07-07" min="2022-01-01" max="2025-01-01"  class="form-control">
    </div>
    <div class="form-group card-body">
        <label>Slot</label>
        <input type="text" name="slot" class="form-control" value="{{old('slot')}}">
    </div>
    <div class="form-group card-body">
            <label>Price</label>
            <input type="text" name="price" class="form-control" value="{{old('price')}}">
    </div>
    <div class="card-body">
        <button type="submit" class="btn btn-info">Add</button>
        <button type="reset" class="btn btn-default float-right">Delete</button>
    </div>
</div>
</form>
</div>
@endsection