@extends('layouts.app')

@section('content')
<div class="hero hero-creative-wrapper">
						<div class="hero-creative">
							<div class="hero-creative-image" style="background-image: url('{{ asset('images/hero-5.jpg') }}');">

								<div class="hero-creative-title">
									<h2>Start socializing <br>with your neighbors</h2>
									<div class="header-search">
										<form>
											<div class="input-group">
												<input type="text" class="form-control" 
													   autocomplete="on" 
													   data-provide="typeahead"
													   placeholder="Search for your society">

												<div class="input-group-addon">
													<i class="fa fa-search"></i>
												</div><!-- /.input-group-addon -->
											</div><!-- /.input-group -->
										</form>
									</div><!-- /.header-search -->
									<a href="#" class="btn btn-secondary btn-lg">Connect <i class="entypo-chevron-right"></i></a>
								</div><!-- /.hero-creative-title -->

								<div class="hero-creative-pin" style="transition-delay: 2.2s; bottom: 90px; left: 60px;">
									<span class="hero-creative-pin-place"></span>
									<div class="hero-creative-pin-title">
										<h3><a href="#">Nyati Meadows</a></h3>
										<h4>10 Active Members</h4>
									</div>
								</div><!-- /.hero-creative-pin -->

								<div class="hero-creative-pin" style="transition-delay: 2.5s; bottom: 60px; left: 300px;">
									<span class="hero-creative-pin-place"></span> 
									<div class="hero-creative-pin-title">
										<h3><a href="#">Brahma Sun City</a></h3>
										<h4>150 Active Members</h4>
									</div>
								</div><!-- /.hero-creative-pin -->			

								<div class="hero-creative-pin" style="transition-delay: 3.3s; bottom: 200px; left: 530px;">
									<span class="hero-creative-pin-place"></span> 
									<div class="hero-creative-pin-title">
										<h3><a href="#">Belmac Residency</a></h3>
										<h4>2 Active Members</h4>
									</div>
								</div><!-- /.hero-creative-pin -->			

								<div class="hero-creative-pin" style="transition-delay: 3s; bottom: 130px; left: 750px;">
									<span class="hero-creative-pin-place"></span> 
									<div class="hero-creative-pin-title">
										<h3><a href="#">Anshul Athena</a></h3>
										<h4>Emerson Street 90210</h4>
									</div>
								</div><!-- /.hero-creative-pin -->		

								<div class="hero-creative-pin" style="transition-delay: 2.8s; bottom: 280px; left: 850px;">
									<span class="hero-creative-pin-place"></span> 
									<div class="hero-creative-pin-title">
										<h3><a href="#">Poetry Slam</a></h3>
										<h4>Emerson Street 90210</h4>
									</div>
								</div><!-- /.hero-creative-pin -->		

								<div class="hero-creative-pin" style="transition-delay: 3.2s; bottom: 100px; left: 1020px;">
									<span class="hero-creative-pin-place"></span> 
									<div class="hero-creative-pin-title">
										<h3><a href="#">The Musical</a></h3>
										<h4>Emerson Street 90210</h4>
									</div>
								</div><!-- /.hero-creative-pin -->		

								<div class="hero-creative-pin" style="transition-delay: 2.7s; bottom: 30px; left: 1400px;">
									<span class="hero-creative-pin-place"></span> 
									<div class="hero-creative-pin-title">
										<h3><a href="#">New York Ballet</a></h3>
										<h4>Emerson Street 90210</h4>
									</div>
								</div><!-- /.hero-creative-pin -->		

								<div class="hero-scroll">
									<div class="hero-scroll-mice">
									</div><!-- /.hero-scroll-mice -->
									<span>Scroll Down</span>
								</div><!-- /.hero-scroll -->								
							</div><!-- /.hero-image -->
						</div><!-- /.hero-creative -->
</div><!-- /.hero -->
<div class="boxes">
	<div class="container-fluid">
		<div class="page-title">
			<h2>Get all you need within your radius</h2>
		</div><!-- /.page-title -->
		<div class="box-wrapper">
			<div class="box">
				 <div onclick="location.href='01.html';">
				  <i class="fa fa-female" style="display:inline-block;"></i> <i class="fa fa-male" style="display:inline-block;"></i>
				  <h4>Activity Partner</h4>
				  <p>Partner to push you for a morning walk or join you in an activity class.</p>
				</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		<div class="box-wrapper">
			<div class="box">
				 <div onclick="location.href='01.html';">
					  <i class="fa fa-book"></i>
					  <h4>Rent Book/ Games</h4>
					   <p>Take old books or games on rent from your neighbors</p>
					</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		<div class="box-wrapper">
			<div class="box">
				 <div onclick="location.href='01.html';">
					  <i class="fa fa-cutlery"></i>
					  <h4>Yummy food</h4>
					   <p>Craving home made food? Knock your neighbor's door!</p>
					</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		<div class="box-wrapper">
			<div class="box">
				<div onclick="location.href='01.html';">
				  <i class="fa fa-futbol-o"></i>
				  <h4>Sports</h4>
				   <p>Look out for someone nearby for your next sport activity. </p>
				</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		
		<div class="box-wrapper">
			<div class="box">
				 <div onclick="location.href='01.html';">
					  <i class="fa fa-user-md"></i>
					  <h4>Doctor</h4>
					  <p>When its an emergency, find a doctor next door.</p>
					</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		
		<div class="box-wrapper">
			<div class="box">
				<div onclick="location.href='01.html';">
				  <i class="fa fa-tint"></i>
				  <h4>Blood Bank</h4>
				   <p>Look for people with the needed blood group in your neighborhood. </p>
				</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		
		<div class="box-wrapper">
			<div class="box">
				 <div onclick="location.href='01.html';">
					  <i class="fa fa-child"></i>
					  <h4>ChildCare</h4>
					   <p>Leave your child in safe hands while you are busy at work</p>
					</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		
		<div class="box-wrapper">
			<div class="box">
				 <div onclick="location.href='01.html';">
					  <i class="fa fa-comments"></i>
					  <h4>Something Unusual</h4>
					  <p>Looking for something unusual from your neighbors. Start Socializing</p>
					</div>
			</div><!-- /.box -->
		</div><!-- /.box-wrapper -->
		
	</div><!-- /.container-fluid -->
</div><!-- /.boxes -->
<div class="cta-wrapper">
	<div class="cta">
		
		<div class="cta-inner">
			<div class="container-fluid">
				<div class="cta-content-wrapper">
					<div class="cta-content">
						<h2>Looking for something else?</h2>
						<h3>Let us know and we will get it for you.</h3>
					</div><!-- /.cta-content -->
					
					<div class="cta-action">
						<a href="#" class="btn btn-primary btn-lg">Add a Local</a>
					</div><!-- /.cta-action -->
				</div><!-- /.cta-content-wrapper -->				
				
			</div><!-- /.container-fluid -->
		</div><!-- /.cta-inner -->		
	</div><!-- /.cta -->
</div>
<div class="container-fluid neigh5-find-padding neigh5-find-bgtint neigh5-container">
	<div class="neigh5-find-title-1">				
		<div class="row text-center">
			<div class="col-md-12">
				<h1 class="common-title">[ TAP YOUR NEIGHBOR ]</h1>
				<p>Sed condimentum tempus auctor. Etiam euismod dapibus odio eu congue. Maecenas eros lacus, tempus et pulvinar ac, commodo eget lacus. Curabitur ex non mi suscipit varius.</p>
			</div>
		</div>
	</div>

				
				<div class="neigh5-find-speakers-area style-a jx-light ">
					<div >
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey">
								<div class="image-container">
								<img  src="{{ asset('images/ppic1.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Varun Mehta</a><br>
							<span>#People with status don't need status.. #</span></h3>
							</div>
						</div>	
				
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey"><div class="image-container">
								<img  src="{{ asset('images/ppic2.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Arun Maheshwari</a><br>
							<span>When i was born..DEVIL said..”Oh Shit..!!!!</span></h3>
							</div>
						</div>	
				
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey"><div class="image-container">
								<img  src="{{ asset('images/ppic3.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Saloni Gupta</a><br>
							<span><i>I didn't change, I just grew up to be like this. </i></span></h3>
							</div>
						</div>	
				
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey">
								<div class="image-container">
								<img  src="{{ asset('images/ppic1.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Varun Mehta</a><br>
							<span>#People with status don't need status.. #</span></h3>
							</div>
						</div>	
				
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey"><div class="image-container">
								<img  src="{{ asset('images/ppic2.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Arun Maheshwari</a><br>
							<span>When i was born..DEVIL said..”Oh Shit..!!!!</span></h3>
							</div>
						</div>	
				
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey"><div class="image-container">
								<img  src="{{ asset('images/ppic2.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Arun Maheshwari</a><br>
							<span>When i was born..DEVIL said..”Oh Shit..!!!!</span></h3>
							</div>
						</div>	
				
				<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey"><div class="image-container">
								<img  src="{{ asset('images/ppic2.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Arun Maheshwari</a><br>
							<span>When i was born..DEVIL said..”Oh Shit..!!!!</span></h3>
							</div>
						</div>	
				
				<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="neigh5-find-speaker-item">
							  <div class="speaker-img grey"><div class="image-container">
								<img  src="{{ asset('images/ppic2.jpg') }}"   alt="">
								</div>
								<div class="overlay">
									<div class="overlay-inner">
										<ul class="socail"><li class="facebook"><a href="http://www.facebook.com/https://www.facebook.com"><i class="fa fa-thumbs-o-up"></i> 123</a></li><li class="twitter"><a href="http://www.twitter.com/https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i> 23</a></li><li class="linkdin"><a href="http://www.linkedin.com/https://www.linkedin.com"><i class="fa fa-users" aria-hidden="true"></i> 35</a></li>
										<li class="googleplus"><a href="http://www.google.com/https://plus.google.com"><i class="fa  fa-map-marker" aria-hidden="true"> 16</i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<h3><a href="#">Arun Maheshwari</a><br>
							<span>When i was born..DEVIL said..”Oh Shit..!!!!</span></h3>
							</div>
						</div>	
				
						
					</div>
				</div>
	
</div>

</div>

  <div class="places_index_block col-md-6">
<div class=" container-fluid">
	<div class="page-title">
		<h2>Best places in neighborhood</h2>
	</div><!-- /.page-title -->
    <div class="row">
		 <div class="col-md-12 " >
			<div class="place_adv">
			<img src="{{ asset('images/food1.jpg') }}" alt="#">
			</div>
		
			<div class="mini-desti-title">
				<div class="pull-left">
					<h6>VALLE AURINA</h6>
					<span class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</span><!-- end rating -->
				</div>
				<div class="pull-right">
					<h6>$500</h6>
				</div>  
				<div class="clearfix"></div>   
				<div class="mini-desti-desc">
					<p>Template based on deep research on the most popular travel booking websites such as</p>
				</div>
			</div><!-- end title -->
		</div>
	</div>
	<div class="row">
	<div class="col-md-6" >
			<div class="place_adv">
			<img src="{{ asset('images/food1.jpg') }}" alt="#">
			</div>
		
			<div class="mini-desti-title">
				<div class="pull-left">
					<h6>VALLE AURINA</h6>
					<span class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</span><!-- end rating -->
				</div>
				<div class="pull-right">
					<h6>$500</h6>
				</div>  
				<div class="clearfix"></div>   
				<div class="mini-desti-desc">
					<p>Template based on deep research on the most popular travel booking websites such as</p>
				</div>
			</div><!-- end title -->
		</div>
		<div class="col-md-6" >
			<div class="place_adv">
			<img src="{{ asset('images/food1.jpg') }}" alt="#">
			</div>
		
			<div class="mini-desti-title">
				<div class="pull-left">
					<h6>VALLE AURINA</h6>
					<span class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</span><!-- end rating -->
				</div>
				<div class="pull-right">
					<h6>$500</h6>
				</div>  
				<div class="clearfix"></div>   
				<div class="mini-desti-desc">
					<p>Template based on deep research on the most popular travel booking websites such as</p>
				</div>
			</div><!-- end title -->
		</div>
	</div>
   
	<div class="right">
    <a href="01.html" class="btn btn-primary va right">View all places</a>
	</div>
  </div>
</div>
  <div class="events_block col-md-6">
<div class=" container-fluid">
	<div class="page-title">
		<h2>Events around you</h2>
	</div><!-- /.page-title -->
    <ul class="timeline">
		
			<li>
				<h3><a href="event.html">Political Ha Ha Box: Free Public Art | Mission Dist.</a></h3>

				<div class="clearfix">
					<div class="timeline-image">
						<a href="event.html" style="background-image: url('{{ asset('images/event1.jpg') }}');"></a>
					</div><!-- /.timeline-image -->

					<div class="timeline-attrs">
						<span>New York / Brooklyn</span>
						<span>Price: <strong>Free</strong></span>
					</div><!-- /.timeline-attrs -->
				</div><!-- /.clearfix -->

				<p>Donec in turpis vitae eros tempus interdum eu quis tellus.</p>
			</li>
		
			<li>
				<h3><a href="event.html">Fog City Movie Night: Finding Nemo</a></h3>

				<div class="clearfix">
					<div class="timeline-image">
						<a href="event.html" style="background-image: url('assets/img/tmp/search-2.jpg');"></a>
					</div><!-- /.timeline-image -->

					<div class="timeline-attrs">
						<span>New York / Manhattan</span>
						<span>Price: <strong>$44.00</strong></span>
					</div><!-- /.timeline-attrs -->
				</div><!-- /.clearfix -->

				<p>ed lacinia rutrum enim facilisis efficitur.</p>
			</li>
		
			<li>
				<h3><a href="event.html">Carnaval Festival 2016: Sunday</a></h3>

				<div class="clearfix">
					<div class="timeline-image">
						<a href="event.html" style="background-image: url('assets/img/tmp/search-3.jpg');"></a>
					</div><!-- /.timeline-image -->

					<div class="timeline-attrs">
						<span>New York / Village</span>
						<span>Price: <strong>$18.00</strong></span>
					</div><!-- /.timeline-attrs -->
				</div><!-- /.clearfix -->

				<p>Duis vel aliquet nibh, ac aliquam ante.</p>
			</li>
		
			<li>
				<h3><a href="event.html">Return of the Cypher Samurai Sunday Night</a></h3>

				<div class="clearfix">
					<div class="timeline-image">
						<a href="event.html" style="background-image: url('assets/img/tmp/search-4.jpg');"></a>
					</div><!-- /.timeline-image -->

					<div class="timeline-attrs">
						<span>New York / Bronx</span>
						<span>Price: <strong>$9.90</strong></span>
					</div><!-- /.timeline-attrs -->
				</div><!-- /.clearfix -->

				<p>Duis eget pulvinar est. Interdum et.</p>
			</li>
		
	</ul>

	<a href="#" class="btn btn-secondary btn-block margin-load">Load More</a>
</div>
</div>
<div class="clearfix"></div>
<div class="cta-wrapper">
	<div class="cta cta1">
		<div class="cta-map"></div><!-- /.cta-map -->
		
		<div class="cta-inner">
			<div class="container-fluid">
				<div class="cta-content-wrapper">
					<div class="cta-content">
						<h2>Do you want to promote an <br>event or a business?</h2>
						<h3>We will present it to your neighbors.</h3>
					</div><!-- /.cta-content -->
					
					<div class="cta-action">
						<a href="#" class="btn btn-black btn-lg">Create Account Now</a>
					</div><!-- /.cta-action -->
				</div><!-- /.cta-content-wrapper -->				
				
			</div><!-- /.container-fluid -->
		</div><!-- /.cta-inner -->		
	</div><!-- /.cta -->
</div>
	
	
@endsection
