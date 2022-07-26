@extends('admin.master')
@section('module', 'Blogs')
@section('action', 'Edit')
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
      <div class="form-group card-body">
        <label for="">Marine Name</label>
        <input type="text" name="name" value="{{$lte->name}}" class="form-control"/>
      </div>
      <div class="form-group card-body">
        <label for="">Intro</label>
        <input type="text" name="intro" value="{{$lte->intro}}" class="form-control"/>
      </div> 
      <div class="form-group  card-body">
        <label>Old Image</label>
        <img src="{{ asset('images/'.$lte->image)}}" width="50px" height="50px">
    </div>
    <div class="form-group card-body">
      <label>Image</label>
      <input type="file" name="image" class="form-control" id="customFile" style="height:100%"> 
  </div>
    {{-- <div>
      <label class="m-2">Cover Images</label>
      <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

    </div> --}}
      <div class="form-group card-body">
        <label for="">Content</label>
        <textarea  class="form-control" name="content" id="ckeditor5">{{$lte->content}}</textarea>
      </div> 
      
    <td>Hình cũ</td>
    <td><img src="{{ asset('images/'.$lte->image)}}" width="300px"/>  
    <div class="card-body">
      <button type="submit"class="btn btn-info">Edit</button>
      <button type="reset" class="btn btn-default float-right">Cancel</button>
  </div>
  </div>  
</form 
@endsection

