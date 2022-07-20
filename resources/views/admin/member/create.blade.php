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
<form method="post" action="{{route('admin.member.store')}}" enctype="multipart/form-data">
@csrf
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Member -- Create</h3>
    </div>
    <div class="form-group card-body">
        <label>Level</label>
        <select name="level" class="form-control">
            <option value="">Please chose level</option>
            <option value="1">Admin</option>
            <option value="2">Member</option>
        </select>
    </div>
    <div class="form-group card-body">
            <label>Username</label>
            <input type="text" name="username" class="form-control" id="" value="{{old('username')}}">
    </div>
    <div class="form-group card-body">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group card-body">
        <label>Email</label>
        <input type="email" name="email" class="form-control" id="" value="{{old('email')}}">
    </div>
    <div class="form-group card-body">
        <label>Avatar</label>
        <input type="file" name="avatar" class="form-control" id="customFile" style="height:100%"> 
    </div>
    <div class="card-body">
        <button type="submit" class="btn btn-info">Add</button>
        <button type="reset" class="btn btn-default float-right">Delete</button>
    </div>
</div>
</form>
</div>
@endsection

