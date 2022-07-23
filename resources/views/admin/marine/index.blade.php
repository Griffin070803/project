@extends('admin.master')
@section('content')
@section('module', 'Marine')
@section('action', 'List')
@if (Session::has('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{Session::get('success') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Marine | <a href="{{route('admin.marine.create')}}">Add Marine</a></h3>
        </div>
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Image</td>
                <td>Marine Name</td>
                <td>Intro</td>
                <td>Content</td>
                <td>Status</td>
                <td>Created_at</td>
                <td>Delete</td>
                <td>Edit</td>
            </tr>
        </thead>
        @forelse($blogs as $marine)
                <td>{{ $loop->iteration }}</td>
                <td>
                    @php
                        $image = $marine->image == NULL ? 'no-image.jpg' : $marine->image;
                        $image_url = asset('images/'. $image);
                    @endphp
                    <img src="{{ $image_url }}"width="50px" height="50px" alt="">
                </td>
                <td>{{ $marine->name }}</td>                
                <td>{{ $marine->intro }}</td>
                <td>{!! $marine->content !!}</td>
                <td>{{ $marine->status }}</td>
                <td>{{ $marine->created_at }}</td>
                <td><a onclick="return confirmDelete()" href="{{ route('admin.marine.delete', ['id' => $marine->id]) }}">Delete</a></td>
                <td><a href="{{ route('admin.marine.edit', ['id' => $marine->id]) }}">Edit</a></td>
            </tr>
            @empty
            <tr>
                <td collspan="9" align="center">No Data</td>
            </tr>
</div>           
    @endforelse
    </table>
@endsection