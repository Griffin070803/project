@extends('user.pro')
@section('content')
<div><h3 class="heading-agileinfo">Fish <i class="fa fa-anchor" aria-hidden="true"></i></h3></div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Bootstrap 5.0 HTML Template</title>
    <link rel="stylesheet" href="{{ asset('temple556/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('temple556/fontawesome/css/all.min.css')}}"> --}}
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
   
        <div class="row tm-mb-90 tm-gallery">
            @foreach ($blogs1 as $lte)
        	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">                
                <figure class="effect-ming tm-video-item">
                    @php
                        $images = $lte->image == NULL ? 'no-image.png' : $lte->image;
                        $image_url = asset('assets/images/'. $images);
                    @endphp
                    <img src="{{ $image_url }}" alt="Image" class="lte" style="width: 100%; height: 200px">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$lte->name}}</h2>
                        <a href="{{ route('user.marine.Information',['id'=>$lte->id])}}">View more</a>
                    </figcaption>                    
                </figure>               
                {{-- <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">18 Oct 2020</span>
                    <span>9,906 views</span>
                </div> --}}
            </div>
            @endforeach
    
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