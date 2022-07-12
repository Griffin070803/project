@extends('admin.master')

      @section('content')
      <div class="card">
        <div class="card-header">
            <h3 class="card-title">Danh sách người liên hệ</h3>
        </div>
        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th style="width: 40px">Delete</th>
                    </tr>
                </thead>
                @foreach ($contacts as $contact)
                <tbody>
                    <tr>
                        <th>{{ $contact->id}}</th>
                        <th>{{ $contact->fname}} {{ $contact->lname }}</th>
                        <th>{{ $contact->phone}}</th>
                        <th>{{ $contact->email}}</th>
                        <th>{{ $contact->message}}</th>
                        <td><a onclick="return confirmDelete()" href="{{route('admin.product.delete', ['id'=> $contact->id])}}">Delete</a></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    
@endsection
