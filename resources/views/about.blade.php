<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>JENKINSON SEA LIFE | EVENT</title>
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
                            <a class="navbar-brand" href="index.html">ABOUT US</a>
                        </h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="{{ route('master') }}">HOME</a></li>
                            <li><a href="{{ route('about') }}" class="active">ABOUT</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">MARINE CREATURES<b class="caret"></b></a>
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
				<li>ABOUT</li>
			</ul>
		 </div>
</div>
 <!--//banner-below-->
<!-- Gallery -->

<div class="about">
    <div class="container">
    <h2 class="heading-agileinfo">About us <i class="fa fa-anchor" aria-hidden="true"></i></h2>
        <div id="horizontalTab">
            <div class="col-md-6 services-right-agileits">
                <h4>Jenkinson Sea Life</h4>
                <p class="para-agileits-w3layouts">It has been dedicated to educating the public on all aspects of marine life and conservation. Each exhibit is designed to promote awareness of the animals, their habitats and conservation. We strive to provide our guests with a unique and memorable experience through creative exhibits as well as innovative educational and outreach programs.</p>
            </div>
            <div class="col-md-6 services-right-agileits">
                <img src="{{ asset('assets/images/i.jpg')}}" class="ab">	
            </div>
        </div>    
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
    <div id="horizontalTab">
        <div class="col-md-6 services-right-agileits">
            <img src="{{ asset('assets/images/we.jpg')}}" class="ab">	
        </div>
            <div class="col-md-6 services-right-agileits">
                <h4>Rangers Team</h4>
                <p class="para-agileits-w3layouts">Hello, we are rangers team.</p>
            </div>
            </div>    
        </div>
        </div>

    </div>
</div>

<div class="team">  
    <div class="container"> 
<h3 class="heading-agileinfo">We are Great Team <i class="fa fa-anchor" aria-hidden="true"></i></h3>
        <div class="team-row w3ls-team-row">  
            <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">   
                <div class="w3ls-effect">
                    <img src="images/v.jpg" alt="img">
                    <div class="w3layouts-caption">
                        <h4>Nguyen Quang Vinh</h4> 
                        <p>Team Leader</p>
                        <p>Contact, Comment</p>
                    </div>
                    <div class="wthree-icon social-icon">
                        <ul class="social-agileinfo">
                            <li><a href="https://www.facebook.com/quanggvinhh09/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="quangvinhnguyen4523@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">   
                <div class="w3ls-effect">
                    <img src="images/m1.jpg" alt="img">
                    <div class="w3layouts-caption">
                        <h4>Tran Cong Minh</h4> 
                        <p>Team Member</p>
                        <p>Marine Creatures</p>
                    </div>
                    <div class="wthree-icon social-icon">
                        <ul class="social-agileinfo">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">   
                <div class="w3ls-effect">
                    <img src="images/me.jpg" alt="img">
                    <div class="w3layouts-caption">
                        <h4>Nguyen Huu Huan</h4> 
                        <p>Team Member</p>
                        <p>Layout, Event</p>
                    </div>
                    <div class="wthree-icon social-icon">
                        <ul class="social-agileinfo">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>    
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">   
                <div class="w3ls-effect">
                    <img src="images/l.jpg" alt="img">
                    <div class="w3layouts-caption">
                        <h4>Bui Quang Lam</h4> 
                        <p>Team Member</p>
                        <p>Booking</p>
                    </div>
                    <div class="wthree-icon social-icon">
                        <ul class="social-agileinfo">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>    
            </div>
            <div class="clearfix"> </div> 
        </div>
    </div>
</div>
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