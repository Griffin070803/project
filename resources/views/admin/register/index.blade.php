@extends('admin-master')
@section('content')
@section('module', 'Information')
@section('action', 'List')
<div>
    @if (Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif
</div>
    <div class="card-header"></div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Stt</th>
                <th>FullName</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Adult</th>
                <th>Children</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->fullname}}</td>
                <td>{{$product->phone}}</td>
                <td>{{$product->email}}</td>
                <td>{{$product->address}}</td>
                <td>{{$product->adult}}</td>
                <td>{{$product->children}}</td>
                <td><a onClick="return confirmDelete()" href="{{route('delete',['id'=>$product->id])}}">Delete</td>
                <td><a href="{{route('edit',['id'=>$product->id])}}">Edit</td>
            </tr>   
            @endforeach
    </table>
    </div>
</div>

@endsection