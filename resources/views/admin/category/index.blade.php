@extends('admin.master')

      @section('content')
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách thể loại</h3>
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