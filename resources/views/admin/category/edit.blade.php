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
<form method="POST" action="{{ route('admin.category.update')}}"> 
    {{-- //['id'=> $categories->id] --}}
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sửa thể loại</h3>
        </div>
        <div class="card-body">
            <label>Father Genre</label>
            <select class="form-control" name="parent">
                <option value="0">----- ROOT -----</option>
                {{-- @foreach($categories as $ct)
                @if (!empty($ct)) {
                    <?php 
                        // $data['parent']=$ct->parent;
                        // $datas[] = $data;
                    ?>
                }
                
                @endif
                @endforeach
                {{list_categories ($datas,0)}} --}}
                            
            </select>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Sửa</button>

            <button type="reset" class="btn btn-default float-right">Xóa</button>
        </div>
    </div>
</form>
@endsection