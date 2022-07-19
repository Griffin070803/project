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
  <form method="post" action="{{ route('admin.lte.update', ['id' => $lte->id]) }}" enctype="multipart/form-data">
  @csrf      
  <div class="card">           
      <div class="card-header">
        <h3 class="card-title">Marine -- Edit</h3>
      </div>
      <div class="form-group card-body">
        <label for="">Marine Name</label>
        <input type="text" name="name" value="{{$lte->name}}" class="form-control"/>
      </div>
      <div class="form-group card-body">
        <label for="">Intro</label>
        <input type="text" name="intro" value="{{$lte->intro}}" class="form-control"/>
      </div> 
    <div class="form-group card-body">
      <label for="">Image</label>
      <div class="form-group card-body">
        <label>Image</label>
        <input type="file" name="image" class="form-control" id="customFile" style="height:100%"> 
    </div>
    <div class="form-group  card-body">
      <label>Old Image</label>
      <img src="{{ asset('images/'.$lte->image)}}" width="50px" height="50px">
  </div>
    </div> 
      <div class="form-group card-body">
        <label for="">Content</label>
        <textarea  class="form-control" name="content" id="ckeditor5">{{$lte->content}}</textarea>
      </div> 
    {{-- <td>Hình cũ</td>
    <td><img src="{{ asset('images/'.$lte->image)}}" width="100px"/>   --}}
    <div class="form-group card-body">
      <label>Status</label>
      <select class="custom-select" name = "status">
          <option value="0">Ẩn</option>
          <option value="1">Hiển thị</option>
      </select>
    </div>
    <div class="card-body">
      <button type="submit"class="btn btn-info">Edit</button>
      <button type="reset" class="btn btn-default float-right">Cancel</button>
  </div>
  </div>  
</form 
@endsection

