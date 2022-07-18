@extends('event')
@section('event')

<div class="about">
    <div class="container">
    <h2 class="heading-agileinfo">Event<i class="fa fa-anchor" aria-hidden="true"></i></h2>
    <div id="horizontalTab">
            <div class="col-md-6 services-right-agileits">
                @php
                    $images = $events->image == NULL ? 'no-image.png' : $events->image;
                    $image_url = asset('assets/dist/img/'.$images)
                @endphp	
                <img src="{{$image_url}}" class="event">
            </div>
            <div class="col-md-6 services-right-agileits">
                <h4>{{$events->name}}</h4>
                <p class="para-agileits-w3layouts">{{$events->schedule}}</p>
                <p class="para-agileits-w3layouts">{{$events->details}}</p>
                <p class="para-agileits-w3layouts">Time Start: {{$events->timestart}}</p>
                <p class="para-agileits-w3layouts">Time End: {{$events->timeend}}</p>
                <p class="para-agileits-w3layouts">Slot: {{$events->slot}}</p>
                <p class="para-agileits-w3layouts">Price: {{$events->price}}</p>
                <a class="read-agileits" href="{{ route('index',['id'=>$events->id]) }}">Join</a>	
            </div>
            </div>    
        </div>
        </div>

    </div>
</div>

@endsection