@extends('admin.master')
@section('module', 'Member')
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

<div>
    @if (Session::has('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif
</div>
<div>
    @if (Session::has('warning'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ Session::get('warning') }}</strong>
    </div>
    @endif
</div>
    <div class="card-header">
    <h3 class="card-title">Member | <a href="{{route('admin.member.create')}}">Add Member</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Avatar</th>
                <th>Username</th>
                <th>Email</th>
                <th>level</th>
                <th>Created_at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @php
                    $avatar = $member->avatar == NULL ? 'no-avatar.png' : $member->avatar;
                    $image_url = asset('assets/dist/img/' . $avatar)
                    @endphp
                    <img src="{{ $image_url }}" width="100px" height="50px" alt="">
                </td>
                <td>{{$member->username}}</td>
                <td>{{$member->email}}</td>
                <td>
                    @if($member->level == 1)<span style="color: mediumblue">Admin</span>
                    @else <span style="color: cornflowerblue">Member</span>
                    @endif</td>
                <td>{{ date('d/m/Y : H:i:s', strtotime($member->created_at))}}</td>
                <td class="project-actions text-right"><a href="{{route('admin.member.edit',['id'=>$member->id])}}" class="btn btn-info btn-sm" href="#"><i class="fas fa-pencil-alt"></i></a></td>
                <td class="project-actions text-right"><a onClick="return confirmDelete()" href="{{route('admin.member.delete',['id'=>$member->id])}}" class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a></td>
            </tr> 
            @endforeach
        </tbody>    
    </table>
    </div>
    <script src="{{ asset('assets/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

    <script src="{{ asset('assets/dist/js/demo.js')}}"></script>
@endsection
