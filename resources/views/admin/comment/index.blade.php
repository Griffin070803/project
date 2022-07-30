@extends('admin.master')
@section('module', 'Evaluate')
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
<div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Marine  Name</td>
                        <td>Name</td>
                        <td>Rating</td>
                        <td>Comment_body</td>
                        <td>Status</td>
                        <td>Delete</td>
                    </tr>
                </thead>
        <tbody>
            @foreach($comments as $key => $comment)
                    <tr>
                        
                        <th>{{ $comment->id}}</th>
                        <th>{{ $comment->CName}}</th>
                        <th>{{ $comment->name_user}}</th>
                        <th>{{ $comment->rating}}</th>
                        <th>{{ $comment->comment_body}}</th>
                        {{-- 0:on 
                    -- 1:off --}}
                    <td>

                    @if($comment->status == 1)
                    <a href="{{route('admin.comment.unactive', ['id'=> $comment->id])}}"><span
                        style="color:red;font-size:2.0em;"class="fa-thumbs-styling fa fa-thumbs-down"></span></a>
                        
                    @else
                    <a href="{{route('admin.comment.active', ['id'=> $comment->id])}}"><span
                            style="color:rgb(28, 212, 44);font-size:2.0em;"
                            class="fa-thumbs-styling fa fa-thumbs-up"></span></a> 
                    @endif
                    </td>
                        <td class="project-actions text-right"><a onclick="return confirmDelete()" href="{{route('admin.comment.delete', ['id'=> $comment->id])}}" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a></td>
                        
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>

        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        
</div>
      @endsection
