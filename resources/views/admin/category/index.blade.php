@extends('admin.master')
      @section('content')
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
            <h3 class="card-title">Category | <a href="{{route('admin.lte.create')}}">Add Category</a></h3>
            </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên thể loại</th>
                        <th>Cập nhật</th>
                        <th style="width: 40px">Xóa</th>
                        <th style="width: 40px">Sửa</th>
                    </tr>
                </thead>
                {{categorySelect($categories)}}
            </table>
        </div>
    </div>
    
@endsection