
<!DOCTYPE html>
<html lang="en">
<head>
<title>Viện Hải Dương</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plunge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--css links-->
<link href="{{ asset ('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="{{ asset ('css/font-awesome.css')}}" rel="stylesheet"><!--font-awesome-->
<link href="{{ asset ('css/style.css')}}" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
{{-- <link href="{{ asset ('css/lsb.css')}}" rel="stylesheet" type="text/css"><!-- gallery --> --}}
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
								{{-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button> --}}
								<h1>
									<a class="navbar-brand" href="{{ asset('assets/index.html') }}">JENKINSON SEA LIFE</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="http://localhost:8000/">HOME</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle, active" data-toggle="dropdown">MARINE <b class="caret"></b></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="{{route('user.marine.fish')}}">Fish</a></li>
                            <li><a href="{{route('user.marine.coral')}}">Coral</a></li>                                                         
                            <li><a href="{{route('user.marine.other')}}">Other</a></li>
                            {{-- <li><a href="{{route('admin.product.loaikhac')}}">Các loài khác</a></li> --}}
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
		<h2 class="inner-title-w3"></h2>
	</div>	
</div>	
<!-- //Header -->
 <!--banner-below-->
 <div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">

           <ul class="w3_short">
				<li><a href="http://localhost:8000/">HOME</a><i>|</i></li>
				<li>MARINE</li>
			</ul>
		 </div>
</div>
 <!--//banner-below-->
<!-- Gallery -->
	@yield('content')
	<!-- //Gallery -->

<!-- footer -->
{{-- <div class="footer">
    <div class="container">
        <div class="w3_agile_footer_grids">
            <div class="col-md-4 w3_agile_footer_grid">
                <h3 class="white-w3ls">Latest Tweets</h3>
                <ul class="agile_footer_grid_list">
                    <li><i class="fa fa-twitter" aria-hidden="true"></i>Nam libero tempore, cum soluta nobis est eligendi optio 
                        cumque nihil impedit. <span>1 day ago</span></li>
                    <li><i class="fa fa-twitter" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">info@mail.com</a>
                        cumque nihil impedit. <span>2 days ago</span></li>
                </ul>
            </div>
            <div class="col-md-4 w3_agile_footer_grid">
                <h3 class="white-w3ls">Navigation</h3>
                <ul class="agileits_w3layouts_footer_grid_list">
                    <li><i class="fa fa-tint" aria-hidden="true"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-tint" aria-hidden="true"></i><a href="about.html">About</a></li>
                    <li><i class="fa fa-tint" aria-hidden="true"></i><a href="gallery.html">Gallery</a></li>
                    <li><i class="fa fa-tint" aria-hidden="true"></i><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 w3_agile_footer_grid">
                <h3 class="white-w3ls">Instagram Posts</h3>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset ('images/t1.jpg')}}" alt=" " class="img-responsive" />
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset ('images/t2.jpg')}}" alt=" " class="img-responsive" />
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset ('images/t3.jpg')}}" alt=" " class="img-responsive" />
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset ('images/t2.jpg')}}" alt=" " class="img-responsive" />
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset ('images/t3.jpg')}}" alt=" " class="img-responsive" />
                    </a>
                </div>
                <div class="w3_agileits_footer_grid_left">
                    <a href="#" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset ('images/t1.jpg')}}" alt=" " class="img-responsive" />
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_address_mail_footer_grids">
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <p>Marsa Allam Rd Red Sea <span>Governorate, Egypt.</span></p>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p>+(012) 345 6789 <span>+(012) 678 3459</span></p>
            </div>
            <div class="col-md-4 w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <p><a href="mailto:info@example.com">info@example1.com</a> 
                    <span><a href="mailto:info@example.com">info@example2.com</a></span></p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="agileinfo_copyright">
            <p>© 2017 Plunge. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div> --}}
@include('blocks.footer')
<!-- Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" >
{{-- <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Plunge</h4>
                <img src="images/bann3.jpg" alt="blog-image" />
                <p class="para-agileits-w3layouts">Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div> --}}
</div>
<!-- //Modal1 -->
<!--//footer -->
<!-- js -->
<script type='text/javascript' src="{{ asset ('js/jquery-2.2.3.min.js')}}"></script>
<!--//js -->
<!-- gallery-pop-up -->
	<script src="{{ asset ('js/lsb.min.js')}}"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->

<!--Scrolling-top -->
<script type="text/javascript" src="{{ asset ('js/move-top.js')}}')}}"></script>
<script type="text/javascript" src="{{ asset ('js/easing.js')}}"></script>
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
<script type="text/javascript" src="{{ asset ('js/bootstrap-3.1.1.min.js')}}"></script>

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "112467054859951");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
{{-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script> --}}

</body>
</html>