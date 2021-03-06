@extends('admin.master')
@section('module', 'Blogs')
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
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> --}}

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
                <td>@if($lte->status == 1)
                    
                    <a href="{{route('admin.lte.active', ['id'=> $lte->id])}}" class="badge bg-success">Show</a>
                @else 
                   <a href="{{route('admin.lte.unactive', ['id'=> $lte->id])}}" class="badge bg-danger">Hide</a>
                @endif
                </td>
                <td>{{ $lte->created_at }}</td> 
                <td class="project-actions text-right"><a href="{{ route('admin.lte.edit', ['id' => $lte->id]) }}" class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i></a></td>
                <td class="project-actions text-right"><a onclick="return confirmDelete()" href="{{ route('admin.lte.delete', ['id' => $lte->id]) }}" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a></td>
            </tr>
</div>           
    @endforeach
    </table>
@endsection