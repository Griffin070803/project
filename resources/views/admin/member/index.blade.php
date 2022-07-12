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
                <th>Created_at</th>
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
                    <img src="{{ $image_url }}" width="50px" height="50px" alt="">
                </td>
                <td>{{$member->username}}</td>
                <td>{{$member->email}}</td>
                <td>{{ date('d/m/Y : H:i:s', strtotime($member->created_at))}}</td>
                <td><a onClick="return confirmDelete()" href="{{route('admin.member.delete',['id'=>$member->id])}}">Xóa</td>
                <td><a href="{{route('admin.member.edit',['id'=>$member->id])}}">Sửa</td>
            </tr> 
            @endforeach
    </table>
    </div>
</div>

</div>
@endsection
