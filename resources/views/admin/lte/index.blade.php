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
       <h3 class="card-title">Danh sách sản phẩm</h3>
    </div>
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Hình ảnh</td>
                <td>Tên sản phẩm</td>
                <td>Giới thiệu</td>
                <td>Nội dung</td>
                <td>Trạng thái</td>
                <td>Thời gian</td>
                <td>Xóa</td>
                <td>Sửa</td>
            </tr>
        </thead>
        @forelse($blogs as $lte)
                <td>{{ $loop->iteration }}</td>
                <td>
                    @php
                        $image = $lte->image == NULL ? 'no-image.jpg' : $lte->image;
                        $image_url = asset('images/'. $image);
                    @endphp
                    <img src="{{ $image_url }}"widtd="50px" height="80px" alt="">
                </td>
                <td>{{ $lte->name }}</td>                
                <td>{{ $lte->intro }}</td>
                <td>{{ $lte->content }}</td>
                <td>{{ $lte->status }}</td>
                <td>{{ $lte->created_at }}</td>
                <td><a onclick="return confirmDelete()" href="{{ route('admin.lte.delete', ['id' => $lte->id]) }}">Xóa</a></td>
                <td><a href="{{ route('admin.lte.edit', ['id' => $lte->id]) }}">Sửa</a></td>
            </tr>
</div>           
    @endforelse
    </table>
@endsection