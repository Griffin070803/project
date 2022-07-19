@extends('admin.master')
@section('content')

@if (Session::has('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{Session::get('success') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Marine | <a href="{{route('admin.lte.create')}}">Add Marine</a></h3>
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
        @forelse($blogs as $lte)
                <td>{{ $loop->iteration }}</td>
                <td>
                    @php
                        $image = $lte->image == NULL ? 'no-image.jpg' : $lte->image;
                        $image_url = asset('images/'. $image);
                    @endphp
                    <img src="{{ $image_url }}"width="50px" height="50px" alt="">
                </td>
                <td>{{ $lte->name }}</td>                
                <td>{{ $lte->intro }}</td>
                <td>{{ $lte->content }}</td>
                <td>{{ $lte->status }}</td>
                <td>{{ $lte->created_at }}</td>
                <td><a onclick="return confirmDelete()" href="{{ route('admin.lte.delete', ['id' => $lte->id]) }}">Xóa</a></td>
                <td><a href="{{ route('admin.lte.edit', ['id' => $lte->id]) }}">Sửa</a></td>
            </tr>
            @empty
            <tr>
                <td collspan="9" align="center">No Data</td>
            </tr>
</div>           
    @endforelse
    </table>
@endsection