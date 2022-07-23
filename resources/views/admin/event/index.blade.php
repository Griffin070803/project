@extends('admin.master')
@section('module', 'Event')
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
    <div class="card-header">
    <h3 class="card-title">Event | <a href="{{route('admin.event.create')}}">Add event</a></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Schedule</th>
                <th>Details</th>
                <th>Time Start</th>
                <th>Time End</th>
                <th>Slot</th>
                <th>Price</th>
                <th>Created_at</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$event->name}}</td>
                <td>
                    @php
                        $images = $event->image == NULL ? 'no-image.png' : $event->image;
                        $image_url = asset('assets/dist/img/'.$images)
                    @endphp
                    <img src="{{$image_url}}" width="100px" height="50px">
                </td>
                <td>{!!$event->schedule!!}</td>
                <td>{!!$event->details!!}</td>
                <td>{{$event->timestart}}</td>
                <td>{{$event->timeend}}</td>
                <td>{{$event->slot}}</td>
                <td>@php echo number_format($event->price,0,"",".")@endphp</td> 
                {{-- <td>{{$event->categorys_id}}</td> --}}
                <td>{{ date('d/m/Y : H:i:s', strtotime($event->created_at)) }}</td>
                <td><a onClick="return confirmDelete()" href="{{route('admin.event.delete',['id'=>$event->id])}}">Delete</td>
                <td><a href="{{route('admin.event.edit',['id'=>$event->id])}}">Edit</td>
            </tr> 
            @endforeach
        </tbody>    
    </table>
    </div>
</div>

</div>
@endsection