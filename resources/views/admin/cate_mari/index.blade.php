@extends('admin.master')
@section('content')
@section('module', 'Cate - Marine')
@section('action', 'List')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush

@push('js')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
@endpush
      <div>
        @if (Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ Session::get('success') }}</strong>
        </div>
        @endif
    </div>
    <div class="card-header">
            <h3 class="card-title">Cate - MARINE | <a href="{{route('admin.cate_mari.create')}}">Add Cate-MARINE</a></h3>
            </div>
      <div class="card">
        
        <div class="card-body p-0">
            <table id="example1" class="table">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Created_at</td>
                        <td style="width: 40px">Edit</td>
                        <td style="width: 40px">Delete</td>
                    </tr>
                </thead>
                @foreach($marine_creatures as $cate_mari)
                    <tr>
                        <td>{{ $loop->iteration }}</td>                  
                        <td>{{ $cate_mari->name }}</td>
                        <td>{{ $cate_mari->created_at }}</td>
                        <td class="project-actions text-right"><a href="{{ route('admin.cate_mari.edit', ['id' => $cate_mari->id]) }}" class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i></a></td>
                        <td class="project-actions text-right"><a  onclick="return confirmDelete()" href="{{ route('admin.cate_mari.delete', ['id' => $cate_mari->id]) }}" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a></td>
                    </tr>
                @endforeach    
            </table>
        </div>
    </div>   
@endsection