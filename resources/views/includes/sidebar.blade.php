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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=BioRhyme|Bitter|Hind|Kreon|Lora|Merriweather|Rasa|Rokkitt|Slabo+27px"  rel="stylesheet" type="text/css">
    <link href="{{ asset('libraries/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/socialsoc.css') }}" rel="stylesheet" type="text/css" id="css-primary">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
	<div class="header-sticky-inner">
		<div class="site-branding">
			<div class="site-title">						
				<span><img src={{asset('images/socialsoc_icon_white.png')}} alt="Logo" style="width:80px"></span> 
				
			</div><!-- /.site-title -->
			
			</div><!-- /.site-branding -->
			<div class="site-navigation">
			<div class="menu-primary-container">
				<ul id="menu-primary" class="menu">
					@if (Auth::guest())
								<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-4"><a class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-4"><a class="nav-link" data-toggle="modal" data-target="#registerModal">Register</a></a></li>
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
			</div>
		</div>
		</div><!-- /.header-sticky-inner -->
		
		
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
	
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
		<div class="modal-dialog  modal-lg" role="document">
		<div class="modal-content">
		 
		  <div class="modal-body">
			<div class="">
				<div class="panel">
               
                <div class="panel-body modal-register" >
				<div class="col-md-6 modal-left-register modal-left-login" >
					<div class="dt-modal-left-item active" ><img src="{{asset('images/hands-new.jpg')}}" alt="" class="hidden">
					<img src="{{asset('images/login-image.png')}}" alt="" class="get_discovered">
					<p class="dt-modal-desc"></p>
					</div>
				</div>
				<div class="col-md-6 modal-right-register">
					<button type="button" class="close" data-dismiss="modal"  aria-label="Close">
					  <span aria-hidden="true">&times;</span></button>
					  <form class="form-horizontal modal-register-form" id="loginform" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
						<h3 class="model-head">Some beautiful friends cant be made without getting discovered.</h3>
						<div class="form-group" id="login-email">
                           <div class="col-md-12 group flyout">
                                <input id="email_login" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
								<span class="highlight"></span>
								  <span class="bar"></span>
								  <label>Email Address</label>
								<span class="help-block error error_login_email"></span>
                            </div>
                        </div>

                       <div class="form-group" id="login-password">
                             <div class="col-md-12 group flyout">
                                <input id="password_login" type="password" class="form-control" name="password" required>
								<span class="highlight"></span>
								  <span class="bar"></span>
								  <label>Password</label>
								 <span class="help-block error error_login_password"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-md-5">
                                <div class="checkbox chkpop">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
							<div class="pull-right col-md-7 text-right">
								<img src={{asset('images/loading.gif')}} alt="Logo" style="width:30px;margin:0px 10px;display:none;" class="loading">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Login
                                </button>
								 <a class="forgot-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
							</div>
                        </div>
						
						
                    </form>
					
					<div class="form-group text-center ">
						
						<a href="redirect/facebook" class="btn btn-facebook">
						Login using facebook
						</a>
					  <a href="redirect/google" class="btn btn-google">
						Login using google+
					  </a>
					 
					</div>
					<div class="form-group margin-load text-center">
						Already a member?<a href="" data-toggle="modal" data-dismiss="modal" data-target="#loginModal" class="default-link"> Start Socializing</a>
						
					</div>
			   </div>
				</div>
				</div>
			</div>
		</div>
		
		</div>
		</div>
		</div>
	
		<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
		<div class="modal-dialog  modal-lg" role="document">
		<div class="modal-content">
		 
		  <div class="modal-body">
			<div class="">
				<div class="panel">
               
                <div class="panel-body modal-register" >
				<div class="col-md-6 modal-left-register" >
					<div class="dt-modal-left-item active" ><img src="{{asset('images/hands-new.jpg')}}" alt="" class="hidden">
					<img src="{{asset('images/hands-new.png')}}" alt="" class="get_discovered">
					<p class="dt-modal-desc"></p>
					</div>
				</div>
				<div class="col-md-6 modal-right-register">
					<button type="button" class="close" data-dismiss="modal"  aria-label="Close">
					  <span aria-hidden="true">&times;</span></button>
					<form id="registerform" class="form-horizontal modal-register-form" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
						<h3 class="model-head">It has never been easier to reach your neighbors.</h3>
						<div class="form-group" id="register-name">
								<div class="col-md-12 group flyout">
									<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
									<span class="highlight"></span>
									  <span class="bar"></span>
									  <label>Name</label>
									  <span class="help-block error error_reg_name"></span>
									
								</div>
                        </div>

                        <div class="form-group" id="register-email">
                           <div class="col-md-12 group flyout">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>
								<span class="highlight"></span>
								  <span class="bar"></span>
								  <label>Email Address</label>
								<span class="help-block error error_reg_email"></span>
                            </div>
                        </div>

                        <div class="form-group" id="register-mobile">
                            
                            <div class="col-md-12 group flyout">
                                <input id="mobile" type="text" class="form-control" name="mobile" required>
								<span class="highlight"></span>
								  <span class="bar"></span>
								  <label>Mobile</label>
								  <span class="help-block error error_reg_mobile"></span>
                            </div>
                        </div>

                        <div class="form-group" id="register-password">
                             <div class="col-md-12 group flyout">
                                <input id="password" type="password" class="form-control" name="password" required>
								<span class="highlight"></span>
								  <span class="bar"></span>
								  <label>Password</label>
								 <span class="help-block error error_reg_password"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="pull-right col-md-7 text-right">
								<img src={{asset('images/loading.gif')}} alt="Logo" style="width:30px;margin:0px 10px;display:none;" class="loading">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Register
                                </button>
								
							</div>
							
						 </div>
						
                    </form>
					
					<div class="form-group text-center ">
						
						<a href="redirect/facebook" class="btn btn-facebook">
						Login using facebook
						</a>
					  <a href="redirect/google" class="btn btn-google">
						Login using google+
					  </a>
					 
					</div>
					<div class="form-group margin-load text-center">
						Already a member?<a href="" data-toggle="modal" data-dismiss="modal" data-target="#loginModal" class="default-link"> Start Socializing</a>
						
					</div>
			   </div>
				</div>
				</div>
			</div>
		</div>
		
		</div>
		</div>
		</div>
		</div>


    <!-- Scripts -->
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('libraries/bootstrap-typeahead/bootstrap3-typeahead.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/socialsoc.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	<script>
      $(function(){
		$("#loginform").submit(function(e) {
          e.preventDefault();
		  $(".loading").show();
          var form = $(this);
		  $.ajax({
				url     : form.attr("action"),
				type    : form.attr("method"),
				data    : form.serialize(),
				success :function(data){
					window.location.href = '/home';//redirect_url;
                },
				error: function(data)
				{
					var errors = '';
					$(".loading").hide();
					$(".error").html();
					for(datos in data.responseJSON){
						$(".error_login_"+datos).html(data.responseJSON[datos]);
						//errors += data.responseJSON[datos] + '<br>';
					}
					
					
				}
			})
			.done(function(response)
			{
				
					
				//
			})
			.fail(function( jqXHR, json ) 
			{
				//
			});
			return false;
         
        });
        $("#registerform").submit(function(e) {
          e.preventDefault();
		  $(".loading").show();
          var form = $(this);
		  $.ajax({
				url     : form.attr("action"),
				type    : form.attr("method"),
				data    : form.serialize(),
				success :function(data){
					window.location.href = '/home';//redirect_url;
                },
				error: function(data)
				{
					var errors = '';
					$(".loading").hide();
					$(".error").html();
					for(datos in data.responseJSON){
						alert(datos);
						$(".error_reg_"+datos).html(data.responseJSON[datos]);
						//errors += data.responseJSON[datos] + '<br>';
					}
					
					
				}
			})
			.done(function(response)
			{
				
					
				//
			})
			.fail(function( jqXHR, json ) 
			{
				//
			});
			return false;
         
        });
      });
	  
    </script>
</body>
</html>
