<div id="home" class="banner w3l">
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
									<a class="navbar-brand" href="{{ asset('assets/index.html') }}">JENKINSON SEA LIFE</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="" class="active">HOME</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">MARINE<b class="caret"></b></a>
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
		<div class="banner-info wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
			<div  class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h6>Ready for adventure</h6>
							<h3>Diverse marine lif</h3>
							<p>Discover diverse and abundant marine life</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h6>Ready for adventure</h6>
							<h3>All the beauty of the sea</h3>
							<p>See the underwater world with your own eyes</p>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h6>Ready for adventure</h6>
							<h3>Discover mysterious secrets</h3>
							<p>Discover mysterious underwater secrets</p>
						</div>
					</li>
				</ul>
			</div>	
		</div>
		</div>
	</div>	
</div>