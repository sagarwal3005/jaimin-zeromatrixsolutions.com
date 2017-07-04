<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SocialSoc') }}</title>
    <!-- Styles -->
   
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
	 <link href="{{ asset('css/socialsoc.css') }}" rel="stylesheet" type="text/css" id="css-primary">
	<link href="https://fonts.googleapis.com/css?family=BioRhyme|Bitter|Hind|Kreon|Lora|Merriweather|Rasa|Rokkitt|Slabo+27px"  rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/demo.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cs-select.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cs-skin-boxes.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('css/cs-skin-underline.css') }}" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		
    <link href="{{ asset('libraries/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
   
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
	
</head>
<body class="@if (Route::currentRouteName()) page @endif header-size-fixed sticky-header-type-white header-type-minimal-transparent">

    <div id="app">
	<div class="header-sticky">
	
		
</div>
        	<div class="page-wrapper">
	<div class="header-wrapper">
		<div class="header">		
			<div class="header-inner">
				<div class="header-top">
					<div class="container-fluid">
						<div class="header-logo">
							<a class="navbar-brand" href="{{ url('/') }}">
								<span><img src={{asset('images/socialsoc_icon_white.png')}} alt="Logo" style="width:80px"></span> 
								<strong><span>SocialSoc</span></strong>
							</a>
						</div><!-- /.header-logo -->

						<div class="header-toggle sidenav-trigger">
						</div><!-- /.header-toggle -->
					
						<ul class="nav nav-pills nav-secondary nav-right">
							 @if (Auth::guest())
								<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#registerModal">Register</a></a></li>
							@else
								<li class="nav-item has-children">
									<a href="#" class="nav-link active">
										{{ Auth::user()->name }} 
									</a>

									<ul class="sub-menu" role="menu">
										<li>
											<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
												Logout
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
											</form>
										</li>
									</ul>
								</li>
							@endif
							
						</ul>	
						

					</div><!-- /.container-fluid -->
				</div><!-- /.header-top -->

				<!--<div class="header-bottom">
					<div class="container-fluid">
						<div class="nav-primary navbar-toggleable-md collapse">
		<ul class="nav nav-pills">
			<li class="nav-item has-children">
				<a href="#" class="nav-link active">Home</a>

				<ul class="sub-menu">
					<li><a href="index.html">Creative Hero</a></li>
					<li><a href="index-video.html">Video Hero</a></li>								
					<li><a href="index-map.html">Google Map Hero</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="events.html" class="nav-link ">Events</a></li>
			<li class="nav-item"><a href="events-top.html" class="nav-link ">Popular</a></li>
			<li class="nav-item"><a href="pricing.html" class="nav-link ">Pricing</a></li>
			<li class="nav-item"><a href="blog.html" class="nav-link ">Blog</a></li>
			<li class="nav-item"><a href="contact.html" class="nav-link ">Contact</a></li>
		</ul>
	</div>

	<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target=".header .nav-primary">
		<span></span>
		<span></span>
		<span></span>
	</button>	

						
										
					</div>
				</div>-->
			</div><!-- /.header-inner -->
		</div><!-- /.header -->
	</div><!-- /.header-wrapper -->
	
        @yield('content')
		 <div class="footer-wrapper ">
			<div class="footer">
		<div class="container-fluid">
			<div class="footer-inner">
				<div class="footer-top">
					<div class="footer-left">
						<p class="white">&copy; SocialSoc <?php echo date("Y"); ?></a>. All rights reserved.</p>
					</div><!-- /.footer-left -->

					<div class="footer-right">
						<ul class="nav nav-social">
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-twitter"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-dribbble"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-google"></i></a></li>
						</ul>					
					</div><!-- /.footer-right -->
				</div><!-- /.footer-top -->
				<div class="footer-bottom">
					<h3 class="footer-title">Choose Your City</h3>

					<ul class="nav nav-pills nav-menu center">
						<li class="nav-item"><a href="#" class="nav-link">Pune</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Mumbai</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Kolkata</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Bangalore</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Delhi</a></li>
						<li class="nav-item"><a href="#" class="nav-link">Hyderabad</a></li>
					</ul>				
				</div><!-- /.footer-bottom -->
			</div><!-- /.footer-inner -->
		</div><!-- /.container-fluid -->
	</div><!-- /.footer -->
</div><!-- /.footer-wrapper -->
    </div>
	
		

    <!-- Scripts -->
	
	<script src="{{ asset('js/classie.js') }}"></script>
	<script src="{{ asset('js/selectFx.js') }}"></script>
	<script src="{{ asset('js/fullscreenForm.js') }}"></script>
	
	<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	
</body>
</html>
