<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>JENKINSON SEA LIFE | CONTACT</title>
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
<!--//css links-->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
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
									<a class="navbar-brand" href="index.html">CONTACT</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ route('master') }}">HOME</a></li>
                            <li><a href="{{ route('about') }}">ABOUT</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">MARINE CREATURES<b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="{{route('user.marine.fish')}}">Fish</a></li>
									<li><a href="{{route('user.marine.coral')}}">Coral</a></li>
									<li><a href="{{route('user.marine.other')}}">Other</a></li>
								</ul>
							</li>
							<li><a href="{{ route('event') }}">EVENT</a></li>
							<li><a href="{{ route('contact') }}" class="active">CONTACT</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>	
				</nav>
							<div class="clearfix"> </div>
		</div>
		{{-- <h2 class="inner-title-w3">Contact</h2> --}}
	</div>	
</div>	
<!-- //Header -->
 <!--banner-below-->
 <div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">

           <ul class="w3_short">
				<li><a href="{{ route('master') }}">Home</a><i>|</i></li>
				<li>Contact</li>
			</ul>
		 </div>
</div>
 <!--//banner-below-->
<!-- contact -->
@if ($errors->any()) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

	<div class="welcome contact">
		<div class="container">  
				<h3 class="heading-agileinfo">Contact Us <i class="fa fa-anchor" aria-hidden="true"></i></h3>
				<div>
					@if (Session::has('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>	
							<strong>{{ Session::get('success') }}</strong>
					</div>
					@endif
				</div>
			<div class="contact-w3ls-row">
				<form action="{{route('storeContact')}}" method="post">
					@csrf
					<input type="text" name="fname" placeholder="First Name" >
					<input class="email" name="lname" type="text" placeholder="Last Name" >
					<input type="text" name="phone" placeholder="Mobile Number" >
					<input class="email" name="email" type="email" placeholder="Email" >
					<textarea name="message" placeholder="Message"></textarea>
					<input type="submit" value="SUBMIT" id="contact">
				</form>
			</div>  
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7921554405825!2d103.85708781467014!3d1.299507999052204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19b1d754cd1b%3A0xd2c77bcbfbbbab7!2sBeach%20Rd%2C%20Singapore!5e0!3m2!1svi!2s!4v1658855803100!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- //map --> 
<!-- footer -->
@include('blocks.footer')
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Plunge</h4>
					<img src="images/bann3.jpg" alt="blog-image" />
					<p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->

<!--//footer -->
<!-- js -->
<script type='text/javascript' src='{{ asset('assets/js/jquery-2.2.3.min.js') }}'></script>
<!--//js -->
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