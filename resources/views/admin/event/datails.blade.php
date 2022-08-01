@extends('admin.master')
@section('module', 'Event')
@section('action', 'Details')

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
    <div class="card-header">
    <h3 class="card-title">Event | Details: <span style="color:darkblue; font-size: 22px;">@foreach($events as $event){{$event->name}}@endforeach</span></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div style="float: right;">
            <span style="font-size: 18px;">Total Buyer: </span>
            <span style="color:mediumblue;font-size: 22px;">{{$sum_adult + $sum_children}}/@foreach($events as $event){{$event->slot}}@endforeach</span>
        </div>
    <table id="example1" class="table table-bordered table-striped">
        
        <thead>
            <tr>
                <th>Id</th>
                <th>Fullname</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Adult</th>
                <th>Children</th>
                <th>Code</th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $detail)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$detail->fullname}}</td>
                <td>{{$detail->phone}}</td>
                <td>{{$detail->email}}</td>
                <td>{{$detail->address}}</td>
                <td>{{$detail->adult}}</td>
                <td>{{$detail->children}}</td>
                <td>{{$detail->code}}</td>
                <td>{{ date('d/m/Y : H:i:s', strtotime($detail->created_at)) }}</td>
            </tr> 
            @endforeach
            
        </tbody>    
    </table>
    </div>
</div>

</div>
@endsection