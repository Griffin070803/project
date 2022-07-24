@extends('admin.master')
@section('content')
@section('module', 'Blog')
@section('action', 'Create')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
<form method="post" action="{{ route('admin.lte.store') }}" enctype="multipart/form-data">
  
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
      <input type="file" name="image" class="form-control" multiple style="height:100%"> 
      <input type="button" value="Add" id="addmore">
    </div>
    <table>
    </table>
    {{-- @include('admin.lte.test') --}}
    <div class="form-group card-body">
      <label for="">Content</label>
      {{-- <input type="text" name="content" value="{{old ('content')}}" class="form-control"  placeholder="Vui lòng nhập nội dung"/-> --}}
      <textarea  class="form-control" name="content" id="ckeditor2" >{{old('content')}}</textarea>
    </div> 
  <div class="form-group card-body">
    <label>Status</label>
    <select class="custom-select" name = "status">
        <option value="0">Ẩn</option>
        <option value="1">Hiển thị</option>
    </select>
  </div>
  <div class="form-group card-body">
    <label>marine_creatures</label>
    <select name="marine_creatures_id" class="form-control">
        <option value="">--ROOT--</option>
        @foreach ($marine_creatures as $cate_mari)
        <option value="{{$cate_mari->id}}">{{$cate_mari->name}}</option>
        @endforeach;
           
    </select>
  </div>
  <div class="card-body">
    <button type="submit" class="btn btn-info">Add</button>
    <button type="reset" class="btn btn-default float-right">Delete</button>
  </div>
</div>
<script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('js/add.js')}}"></script>

  
</form 
@endsection