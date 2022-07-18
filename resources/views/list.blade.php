@extends('event')
@section('event')
{{-- style="background-color: aliceblue;" --}}
<div class="about">
    <h2 class="heading-agileinfo">Event <i class="fa fa-anchor" aria-hidden="true"></i></h2>
    @foreach($events as $event)   
        <div class="col-md-4 about-w3-grids" style="margin-left: 10px; margin-right: 10px; background: #F5F5F5;">
            <h3>{{$event->name}}</h3>
            <p style="padding-bottom: 20px;">{{$event->schedule}}</p>
            @php
                $images = $event->image == NULL ? 'no-image.png' : $event->image;
                $image_url = asset('assets/dist/img/'.$images)
            @endphp
            <img src="{{$image_url}}" class="marine">
            <a class="read-agileits" href="{{ route('infor',['id'=>$event->id]) }}">Read More</a>
        </div>
    @endforeach
        <div class="clearfix"></div>
</div>

@endsection