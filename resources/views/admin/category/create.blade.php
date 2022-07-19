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
<form method="POST" action="{{ route('admin.category.store') }}"> <!--Lay du lieu post tu store -->
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category -- Add</h3>
        </div>
        
        <div class="card-body">
            <label>Father Genre</label>
            <select class="form-control" name="parent">
                <option value="0">----- ROOT -----</option>
                            {{list_categories (($categories),0)}}
                            
            </select>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Vui lòng nhập tên thể loại" value="{{ old('name')}}">
            </div>
            </select>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Add</button>

            <button type="reset" class="btn btn-default float-right">Delete</button>
        </div>
    </div>
</form>
@endsection