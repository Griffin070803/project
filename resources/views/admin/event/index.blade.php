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
    </table>
    </div>
</div>

</div>
@endsection