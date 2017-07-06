<!-- <div class="all_users">

	@if(isset($t_near_society_members) && !empty($t_near_society_members))
		@foreach($t_near_society_members as $t_near_society_member)
		<div class="single_user" id="{{$t_near_society_member['id']}}">
			<div>{{ $t_near_society_member['name'] }}</div>
			<div><input type="button" value="View Profile" class="view_profile">  </div>
		</div>
		@endforeach
	@endif

</div>
 -->

@extends('layouts.authuser')

@section('content')
<div class="container-fluid">

@if(isset($t_user['profile_image']) && !empty($t_user['profile_image']))
	$image = $t_user['profile_image'];
@endif
	<div class="page-content">
	<h3>View Profile</h3>
		<div class="profile-content">
			<div class="user-detail clearfix">
				<a class="user-image">
					<!-- for upload image comment code --> 
					<!-- <div class="upload-overlay">
						<i class="fa fa-upload"></i>
					</div> -->
					<div class="edit-overlay">
						<i class="fa fa-edit"></i>
					</div>
					<img src="{{(!empty($t_user['profile_image'])) ? asset('images/profile/'.$t_user['profile_image']) : asset('images/default-user.png') }}" alt="logo">
				</a>
				<div class="user-description">
					<p class="user-content name">{{$t_user['name']}}</p>
					<p class="user-content"><i class="fa fa-envelope"></i>{{$t_user['email']}} </p>
					<p class="user-content"><i class="fa fa-phone"></i>{{$t_user['mobile']}}</p>
					<!-- <p class="user-content"><i class="fa fa-unlock-alt"></i>yujk</p> -->
				</div>
			</div>
			
			
		</div>
	</div>
</div>

@endsection
