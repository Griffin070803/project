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
<form method="post" action="{{ route('admin.marine.store') }}" enctype="multipart/form-data">
  @csrf    
  <div class="card">             
    <div class="form-group card-body">
      <label for="">Marine Name</label>
      <input type="text" name="name" value="{{old ('name')}}" class="form-control"/>
    </div>
    <div class="form-group card-body">
      <label for="">Intro</label>
      <input type="text" name="intro" value="{{old ('intro')}}" class="form-control"/>
    </div> 
    <div class="form-group card-body">
      <label>Image</label>
      <input type="file" name="image" class="form-control" id="customFile" style="height:100%"> 
  </div>
    <div class="form-group card-body">
      <label for="">Content</label>
      {{-- <input type="text" name="content" value="{{old ('content')}}" class="form-control"  placeholder="Vui lòng nhập nội dung"/> --}}
      <textarea  class="form-control" name="content" id="ckeditor2" >{{old('content')}}</textarea>
    </div> 
  <div class="form-group card-body">
    <label>Status</label>
    <select class="custom-select" name = "status">
        <option value="0">Ẩn</option>
        <option value="1">Hiển thị</option>
    </select>
  </div>
  <div class="card-body">
    <button type="submit" class="btn btn-info">Add</button>
    <button type="reset" class="btn btn-default float-right">Delete</button>
  </div>
</div>  
</form 
@endsection