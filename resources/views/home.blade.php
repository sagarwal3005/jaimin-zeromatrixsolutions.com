@extends('layouts.authuser')

@section('content')


	<div class="container-fluid no-padding">
		<div class="row full-width-row">
		<div class="col-md-2 profile-sidebar">
		</div>
		<div class="col-md-10 page-profile">
		<div class="page-title">

			<h2>Hello <span class="user_name">{{ Auth::user()->name }}</span>, Let's get you start socializing! </h2>
		</div><!-- /.page-title -->
		
			<div class="fs-form-wrap" id="fs-form-wrap" style="min-height:600px">
			<form id="myform" class="fs-form fs-form-full" autocomplete="off" action="/saveUserDetails" method="post">
					
					 {!! csrf_field() !!}
					 <ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Would you like to tell us something about you?</label>
							<textarea  class="fs-anim-lower"  name="user_description"  id="q4" name="q4" placeholder="" >{{$t_user['user_description']}}</textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Tell us where you live</label>
							<div class="wrap">
								<select class="cs-select cs-skin-underline fs-anim-lower" name="society_id" required id="society_select">
									<option value="" disabled >Choose your apartment</option>
									@if(!empty($t_societies))
										@foreach($t_societies as $t_society)
											<option {{($t_user['society_id'] == $t_society['id'] ? "selected" : "")}} value="{{$t_society['id']}}">{{$t_society['name']}}</option>
										@endforeach

									@endif
									<!-- <option value="1">Belmac Residency, Pune</option>
									<option value="1">Brahma Sun City, Pune</option>
									<option value="2">Poetry Slam, Pune</option>
									<option value="3">Fort Residency, Pune</option> -->
								</select>
							</div>
							
						</li>
						
						<li>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">What's your interest area</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">

								
								@if(!empty($t_categories))
									@foreach($t_categories as $t_category)
										<span><input id="{{$t_category['id']}}" name="category_ids[]" type="checkbox" value="{{$t_category['id']}}" {{(!empty($t_category['user_id']) ? "checked" : "")}} style="opacity:1"/><label for="{{$t_category['id']}}" class="radio-social"><span><img src="{{URL::to('/images/category').'/'.$t_category['category_image']}}" alt=""></span>{{$t_category['title']}}</label></span>
									@endforeach
								@endif
								<!-- <span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="education.png" alt=""></span>Books</label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="gaming.png" alt=""></span>Gaming</label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="food.png" alt=""></span>Food</label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="fitness.png" alt=""></span>Health & Fitness</label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="parenting.png" alt=""></span>Parenting</label></span> -->
								
								
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">What all can you offer to your neighbors</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="education.png" alt=""></span>Rent Book/Games</label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="food.png" alt=""></span>Food</label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="medical.png" alt=""></span>Medical Assistance</label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="food.png" alt=""></span>Blood </label></span>
								<span><input id="q3c" name="q3" type="checkbox" value="social"/><label for="q3c" class="radio-social"><span><img src="fitness.png" alt=""></span>Child Care</label></span>
								
								
							</div>
						</li>
						
						
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Send answers</button>
				</form><!-- /fs-form -->
			</div>
		
		</div>
	</div>
		</div>

<div class="clear"></div>

<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script type="text/javascript">

	if($('#society_select').val()){
	    $('#society_select').change();
	}
		

</script>
@endsection

