@extends('user.pro')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Video Detail Page</title>
    <link rel="stylesheet" href="{{ asset('temple556/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temple556/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temple556/css/templatemo-style.css')}}">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
   
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">Video title goes here</h2>
        </div>
        {{-- @foreach ($blogs as $lte) --}}
        <div class="row tm-mb-90"> 
            @foreach ($blogs as $lte)           
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                @php
                        $avatar = $lte->avatar == NULL ? 'no-image.jpg' : $lte->avatar;
                        $image_url = asset('images/'. $avatar);
                    @endphp
                    <img src="{{ $image_url }}" alt="Image" class="img-fluid">
                    {{-- <video autoplay muted loop controls id="tm-video">
                        <source src="{{ asset('temple556/video/hero.mp4')}}" type="video/mp4">
                    </video> --}}
            </div>
            @endforeach
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                @foreach ($blogs as $lte)
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">{{$lte->name}}</h3>
                    </p>
                    <div class="text mb-5">
                        <a><span style="font-size: 16pt;">{{$lte->intro}}</span></a>
                    </div> 
                                     
                    {{-- <div class="mb-4 d-flex flex-wrap">
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Format:> </span><span class="tm-text-primary">1920x1080</span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Format: </span><span class="tm-text-primary">MP4</span>
                        </div>
                        <div>
                            <span class="tm-text-gray-dark">Duration: </span><span class="tm-text-primary">00:00:20</span>
                        </div>
                    </div> --}}
                    <div class="mb-4">
                        <h3> <span style="font-size: 16pt;">{{$lte->content}}</span></h3>
                        </div>
                    <div>
                        <h3 class="tm-text-gray-dark mb-3"></h3>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block"><img src="{{ asset ('images/bachtuoc-trang.jpg')}}" widtd="50px" height="80px" alt=""></a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block"><img src="{{ asset ('images/haiquy.jpg')}}" widtd="50px" height="80px" alt=""></a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Nature</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Background</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Timelapse</a>
                        <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Night</a>
                        {{-- <a href="#" class="tm-text-primary mr-4 mb-2 d-inline-block">Real Estate</a> --}}
                    </div>
                    @endforeach
                </div>              
            </div>        
        </div>  
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Videos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            @foreach ($blogs as $lte)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    @php
                        $avatar = $lte->avatar == NULL ? 'no-image.jpg' : $lte->avatar;
                        $image_url = asset('images/'. $avatar);
                    @endphp
                    <img src="{{ $image_url }}" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$lte->name}}</h2>
                        <a href="{{ route('user.marine.Information')}}">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">12 Oct 2020</span>
                    <span>12,460 views</span>
                </div>
                
    </div> <!-- container-fluid, tm-container-content -->
    @endforeach
        </div>
    
    
    <script src="{{ asset('temple556/js/plugins.js')}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>
@endsection