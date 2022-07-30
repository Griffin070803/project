<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JENKINSON SEA LIFE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Plunge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } 
        </script>
        <!--css links-->
        <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!--bootstrap-->
        <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
        <!--font-awesome-->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!--stylesheet-->
        <link href="{{asset('assets/css/lsb.css')}}" rel="stylesheet" type="text/css">
        <!-- gallery -->
        <!--//css links-->
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!--form-->
        <style>
            .oSoLuong{
                width:30px;
                height:30px;
                border: 1px solid black;
                float: left;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        @include('block.header')
        <!-- //Header -->
        <!--banner-below-->
        @include('block.banner')
        <!--//banner-below-->
        <!-- Gallery -->
        <div class="inner-paddings-w3ls">
            @yield('content')
            
        </div>
        <!-- //Gallery -->
        <!-- footer -->
        @include('blocks.footer')
        <!-- Modal1 -->
        @include('block.modal')
        <!-- //Modal1 -->
        <!--//footer -->
        <!-- js -->
        @include('block.footer-js')
    </body>
</html>
