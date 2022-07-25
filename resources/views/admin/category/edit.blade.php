@extends('admin.master')
@section('content')
@section('module', 'Category')
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
<form method="POST" action="{{ route('admin.category.update',['id'=>$edit->id])}}"> 
    {{-- //['id'=> $categories->id] --}}
    @csrf
    <div class="card">
        <div class="card-body">
            <label>Father Genre</label>
            <select class="form-control" name="parent">
                <option value="0">----- ROOT -----</option>
                {{list_categories ($categorys, $edit->parent)}}
                            
            </select>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập tên thể loại" value="{{$edit->name}}">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Edit</button>

            <button type="reset" class="btn btn-default float-right">Cancel</button>
        </div>
    </div>
</form>
@endsection