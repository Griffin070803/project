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
<form method="post" action="{{ route('admin.lte.store') }}" enctype="multipart/form-data">
  @csrf    
  <div class="card">             
    <div class="form-group card-body">
      <label for="">Tên sản phẩm</label>
      <input type="text" name="name" value="{{old ('name')}}" class="form-control"  placeholder="Vui lòng nhập tên sản phẩm"/>
    </div>
    <div class="form-group card-body">
      <label for="">Giới thiệu</label>
      <input type="text" name="intro" value="{{old ('intro')}}" class="form-control"  placeholder="Vui lòng nhập giới thiệu"/>
    </div> 
  <div class="form-group card-body">
    <label for="">Hình ảnh</label>
    <div class="custom-file">
      <input type="file" name="image"  class="custom-file-input" id="customFile"/>
      <label class="custom-file-label" for="customFile">Choose File</label>
    </div>
  </div> 
    <div class="form-group card-body">
      <label for="">Nội dung</label>
      {{-- <input type="text" name="content" value="{{old ('content')}}" class="form-control"  placeholder="Vui lòng nhập nội dung"/> --}}
      <textarea  class="form-control" name="content" placeholder="Vui lòng nhập nội dung">{{old('content')}}</textarea>
    </div> 
  <div class="form-group card-body">
    <label>Trạng thái </label>
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