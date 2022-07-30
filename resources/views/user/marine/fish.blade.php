@extends('user.pro')
@section('action', 'FISH')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<div><h3 class="heading-agileinfo" style="margin-top: 40px">Fish <i class="fa fa-anchor" aria-hidden="true"></i></h3></div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>Catalog-Z Bootstrap 5.0 HTML Template</title> --}}
    <link rel="stylesheet" href="{{ asset('temple556/css/bootstrap.min.css')}}">

   

    {{-- <link rel="stylesheet" href="{{ asset('temple556/fontawesome/css/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('temple556/css/templatemo-style.css')}}">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <div class="box">
        <form class="sbox" action="" method="get">
            <input class="stext" type="text" id="search" name="search" placeholder="search...">             
                    <i class="fa fa-search"></i>
        </form>
    </div>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
   
        <div class="row tm-mb-90 tm-gallery">
            @foreach ($blogs1 as $lte)
            @if ($lte->status == 1) 
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">                
                <figure class="effect-ming tm-video-item">
                    @php
                        $images = $lte->image == NULL ? 'no-image.png' : $lte->image;
                        $image_url = asset('images/'. $images);
                    @endphp
                    <img src="{{ $image_url }}" alt="Image" class="lte" style="width: 100%; height: 200px">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$lte->name}}</h2>
                        <a href="{{ route('user.marine.information',['id'=>$lte->id])}}">View more</a>
                    </figcaption>                    
                </figure>               
            </div>
            @endif   	
            @endforeach
            <div style="width: 100%; display: flex; align-items: center;justify-content: center; margin-bottom: 70px;">
                {{$blogs1->appends(request()->all())->links()}}
            </div>
           
    </div> <!-- container-fluid, tm-container-content -->

    
    <script src="{{ asset('temple556/js/plugins.js')}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>
@endsection