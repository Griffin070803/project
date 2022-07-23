@extends('admin.master')
@section('content')
@section('module', 'Event')
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
<form method="post" action="{{route('admin.event.update',['id'=>$event->id])}}" enctype="multipart/form-data">
@csrf
    <!-- Default box -->
    <div class="card">
        <div class="form-group card-body">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$event->name}}">
        </div>
        <div class="form-group  card-body">
            <label>Old Image</label>
            @php
                $images = $event->image == NULL ? 'no-image.png' : $event->image;
                $image_url = asset('assets/dist/img/'.$images)
            @endphp
            <img src="{{$image_url}}" width="50px" height="50px">
        </div>

        <div class="form-group card-body">
            <label>Image</label>
            <input type="file" name="image" class="form-control" id="customFile" style="height:100%"> 
        </div>
        <div class="form-group card-body">
            <label>Schedule</label>
            <textarea  class="form-control" name="schedule" id="ckeditor3">{{$event->schedule}}</textarea>
        </div>
        <div class="form-group card-body">
                <label>Details</label>
                <textarea  class="form-control" name="details" id="ckeditor4" >{{$event->details}}</textarea>
        </div>
        <div class="form-group card-body">
            <label>Time Start</label>
            <input type="datetime-local" name="timestart">
        </div>
        <div class="form-group card-body">
            <label>Time End</label>
            <input type="datetime-local" name="timeend">
        </div>
        <div class="form-group card-body">
            <label>Slot</label>
            <input type="text" name="slot" class="form-control" value="{{$event->slot}}">
        </div>
        <div class="form-group card-body">
                <label>Price</label>
                <input type="text" name="price" class="form-control" value="{{$event->price}}">
        </div>
        <div class="card-body">
            <button type="submit"class="btn btn-info">Edit</button>
            <button type="reset" class="btn btn-default float-right">Cancel</button>
        </div>
    </div>
</form>
</div>
@endsection