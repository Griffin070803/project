@extends('admin.master')
@section('content')
@section('module', 'Member')
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
<form method="post" action="{{route('admin.member.update',['id'=>$member->id])}}" enctype="multipart/form-data">
@csrf
    <!-- Default box -->
    <div class="card">
    
        <div class="form-group card-body">
            <label>Level</label>
            <select class="form-control">
                <option value="">Please chose a value</option>
                <option value="1" {{ $member->level == 1 ? 'checked' : ''}}>Admin</option>
                <option value="2" {{ $member->level == 2 ? 'checked' : ''}}>Member</option>
            </select>
        </div>
        <div class="form-group card-body">
                <label>Username</label>
                <input type="text" name="username" class="form-control" id="" value="{{$member->username}}">
        </div>
        <div class="form-group card-body">
            <label>Password</label>
            <input type="password" name="password" class="form-control" id="">
        </div>
        <div class="form-group card-body">
            <label>Email</label>
            <input type="email" name="email" class="form-control" id="" value="{{$member->email}}">
        </div>
        <div class="form-group  card-body">
            <label>Old Avatar</label>
            @php
                $images = $member->avatar == NULL ? 'no-image.png' : $member->avatar;
                $image_url = asset('assets/dist/img/'.$images)
            @endphp
            <img src="{{$image_url}}" width="400px" height="200px">
        </div>
        <div class="form-group card-body">
            <label>Avatar</label>
            <input type="file" name="avatar" class="form-control" id="customFile" style="height:100%"> 
        </div>
        <div class="card-body">
            <button type="submit" class="btn btn-info">Edit</button>
            <button type="reset" class="btn btn-default float-right">Cancel</button>
        </div>
    </div>
</form>
</div>
@endsection