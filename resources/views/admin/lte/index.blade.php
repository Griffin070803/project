@extends('admin.master')
@section('module', 'Blog')
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
@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{Session::get('success') }}</strong>
</div>
@endif
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Blog | <a href="{{route('admin.lte.create')}}">Add Blog</a></h3>
        </div>
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Image</td>
                <td>Name</td>
                <td>Intro</td>
                {{-- <td>Content</td> --}}
                <td>Status</td>
                <td>Created_at</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        @foreach($blogs as $lte)
            <tbody>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @php
                        $image = $lte->image == NULL ? 'no-image.jpg' : $lte->image;
                        $image_url = asset('images/'.$image);
                    @endphp
                    <img src="{{ $image_url }}"width="100px" height="100px" alt="">
                </td>
                {{-- <td><img src="cover/{{ $lte->image }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td> --}}
                <td>{{ $lte->name }}</td>                
                <td>{{ $lte->intro }}</td>
                {{-- <td>{!! $lte->content !!}</td> --}}
                <td>{{ $lte->status }}</td>
                <td>{{ $lte->created_at }}</td>
                <td class="project-actions text-right"><a href="{{ route('admin.lte.edit', ['id' => $lte->id]) }}" class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i></a></td>
                <td class="project-actions text-right"><a onClick="return confirmDelete()" onclick="return confirmDelete()" href="{{ route('admin.lte.delete', ['id' => $lte->id]) }}" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a></td>
            </tr>
        </tbody>
</div>           
    @endforeach
    </table>
@endsection