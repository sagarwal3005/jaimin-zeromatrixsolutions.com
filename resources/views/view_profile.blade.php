
@extends('layouts.authuser')

@section('content')
<div class="container-fluid">

	<div class="page-content">
	<h3>View Profile</h3>
		<div class="profile-content">
			<div class="user-detail clearfix">
				<a class="user-image">
					
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
