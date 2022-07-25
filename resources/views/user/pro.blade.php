<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>JENKINSON SEA LIFE | @yield('action')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plunge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--css links-->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet"><!--font-awesome-->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<link href="{{ asset('assets/css/lsb.css') }}" rel="stylesheet" type="text/css"><!-- gallery -->
<!--//css links--> 
<!--fonts-->
<link href="{{ asset('assets//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700') }}" rel="stylesheet">
<link href="{{ asset('assets//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- Header -->
<div id="home" class="banner inner-bnr-w3l">
	<div class="container">
		<div class="header-nav">
			<nav class="navbar navbar-default">
					<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="index.html">MARINE</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ route('master') }}">HOME</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle, active" data-toggle="dropdown">MARINE<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="{{route('user.marine.fish')}}">Fish</a></li>
									<li><a href="{{route('user.marine.coral')}}">Coral</a></li>
									<li><a href="{{route('user.marine.other')}}">Other</a></li>
								</ul>
							</li>
							<li><a href="{{ route('event') }}">EVENT</a></li>
							<li><a href="{{ route('contact') }}">CONTACT</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>
							<div class="clearfix"> </div>
		</div>
		{{-- <h2 class="inner-title-w3">Event</h2> --}}
	</div>	
</div>	
<!-- //Header -->
 <!--banner-below-->
 <div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">

           <ul class="w3_short">
				<li><a href="{{ route('master') }}">Home</a><i>|</i></li>
				<li>MARINE</li>
			</ul>
		 </div>
</div>
 <!--//banner-below-->
<!-- Gallery -->
@yield('content')

<!-- //Gallery -->

<!-- footer -->
@include('blocks.footer')
<!-- Modal1 -->

<!-- //Modal1 -->
<!--//footer -->
<!-- js -->
<script type='text/javascript' src='{{ asset('assets/js/jquery-2.2.3.min.js') }}'></script>
<!--//js -->
<!-- gallery-pop-up -->
	<script src="{{ asset('assets/js/lsb.min.js') }}"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->

<!--Scrolling-top -->
<script type="text/javascript" src="{{ asset('assets/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/easing.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--//Scrolling-top -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-3.1.1.min.js') }}"></script>
</body>
</html>