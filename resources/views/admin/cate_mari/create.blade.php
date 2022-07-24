@extends('admin.master')
@section('content')
@section('module', 'Marine')
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
<form method="POST" action="{{ route('admin.cate_mari.store') }}"> <!--Lay du lieu post tu store -->
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">cate_mari -- Add</h3>
        </div>
        
        <div class="card-body">
            <label>Id</label>
            <input type="text" name="id" class="form-control" placeholder="">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập tên thể loại" value="{{ old('name')}}">
                <label>category</label>
                <select class="form-control" name="">
                    <option value="">--ROOT--</option>
                    @foreach ($marine_creatures as $cate_mari)
                    <option value="{{$cate_mari->id}}">{{$cate_mari->name}}</option>
                    @endforeach;
                </select>    
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Add</button>

            <button type="reset" class="btn btn-default float-right">Delete</button>
        </div>
    </div>
</form>
@endsection