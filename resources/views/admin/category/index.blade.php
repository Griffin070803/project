@extends('admin.master')
      @section('content')
      @section('module', 'Category')
@section('action', 'List')
      <div>
        @if (Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ Session::get('success') }}</strong>
        </div>
        @endif
    </div>
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category | <a href="{{route('admin.category.create')}}">Add Category</a></h3>
            </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th style="width: 40px">Delete</th>
                        <th style="width: 40px">Edit</th>
                    </tr>
                </thead>
                {{categorySelect($categories)}}
            </table>
        </div>
    </div>
    
@endsection