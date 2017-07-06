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

	<div class="page-content">
		<div class="profile-content">
			<div class="user-detail clearfix">
				<a class="user-image">
					<!-- for upload image comment code --> 
					<!-- <div class="upload-overlay">
						<i class="fa fa-upload"></i>
					</div> -->
					<div class="edit-overlay">
					<input type="file" accept="images/*" style="opacity: 0" name="profile_image" id="profile_image">
						<i class="fa fa-edit"></i>
					</div>
					<img id="display_image" src="{{(!empty($t_user['profile_image'])) ? asset('images/profile/'.$t_user['profile_image']) : asset('images/default-user.png') }}" alt="logo">
				</a>
				<div class="user-description">
					<p class="user-content name">{{$t_user['name']}}</p>
					<p class="user-content"><i class="fa fa-envelope"></i>{{$t_user['email']}} </p>
					<p class="user-content"><i class="fa fa-phone"></i>{{$t_user['mobile']}}</p>
					<!-- <p class="user-content"><i class="fa fa-unlock-alt"></i>yujk</p> -->
				</div>
			</div>
			<div class="society-members-content">
				<h4 class="list-title">Nearest Society Member</h4>
				<div class="list-content">
					<ul>

					@if(isset($t_near_society_members) && !empty($t_near_society_members))
						@foreach($t_near_society_members as $t_near_society_member)

						
						<li class="single_user" id="{{$t_near_society_member['id']}}">
							<div class="member-img">
							<img height="40" src="{{(!empty($t_near_society_member['profile_image'])) ? asset('images/profile/'.$t_near_society_member['profile_image']) : asset('images/default-user.png') }}">	
							</div>
							<div class="member-details clearfix">
								<div class="detail-content">
									<h4>{{ $t_near_society_member['name'] }}</h4>
									<p>{{ $t_near_society_member['user_description'] }}</p>
								</div>
								<div class="button-content">
									<button class="view-profile-btn view_profile">View Profile</button>
								</div>
							</div>
						</li>

						@endforeach
					@endif
						<!-- <li>
							<div class="member-img">
							<img src={{asset('images/john.jpeg')}}>	
							</div>
							<div class="member-details clearfix">
								<div class="detail-content">
									<h4>John Bravo</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
								<div class="button-content">
									<button class="view-profile-btn">View Profile</button>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
			<div class="society-members-content">
				<h4 class="list-title">Recent Activities</h4>
				<div class="list-content activity-list">
					<ul>

						

						@if(isset($t_notifications) && !empty($t_notifications))
						@foreach($t_notifications as $t_notification)

						
						<li>
						  <p>{{$t_notification['notification']}}</p>
						  <span class="grey-text">{{ date('d-m-Y H:i:s',strtotime($t_notification['created_at'])) }}</span>
						</li>

						@endforeach
					@endif
						<!-- <li>
							<p><span class="name">Bijal Shah</span>has Just Posted A photo</p>
							<span class="grey-text">6 mints ago</span>
						</li>
						<li>
							<p><span class="name">Sagar Shah</span>has Just Posted A photo</p>
							<span class="grey-text">6 mints ago</span>
						</li>
						<li>
							<p><span class="name">Bijal Shah</span>has Just Posted A photo</p>
							<span class="grey-text">6 mints ago</span>
						</li>
						<li>
							<p><span class="name">Sagar Shah</span>has Just Posted A photo</p>
							<span class="grey-text">6 mints ago</span>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="{{ asset('admin') }}/plugins/jQueryUI/jquery-ui.min.js"></script>

<script type="text/javascript">
	
	 
  $(document).on('click','.view_profile',function(){

  	
  	var self = this;
       $.ajax({
              url:'/checkRequest',
              type:'post',
              data:{receiver_user_id:$(self).closest('.single_user').attr('id'),_token: "{{ csrf_token() }}"},
              dataType:'JSON',
              async:false,
              success:function(res){
                  if(res.status==0){                      
                      alert('You have already sent Request for view profile ');
                  }else  if(res.status==1){                      
                      location.href="/viewProfile/"+$(self).closest('.single_user').attr('id');
                  }else  if(res.status==2){                      
                      alert('Your request for view profile has rejected by user ');
                  }else  if(res.status==3){                      
                      if(confirm('Are You sure Want to send request for view Profile')){
                      		sendRequest(self);
                      }
                  }
              },
              error:function(){
                   alert('Something Went Wrong');
              }
          })        
  })

  function sendRequest(self){
		 $.ajax({
	          url:'/sendRequest',
	          type:'post',
	          data:{receiver_user_id:$(self).closest('.single_user').attr('id'),_token: "{{ csrf_token() }}"},
	          dataType:'JSON',
	          async:false,
	          success:function(res){
	              if(res.status==0){                      
	                  alert('Please Try Again ');
	              }else if(res.status==1){                      
	                  alert('Request send successfully');
	              }
	          },
	          error:function(){
	               alert('Something Went Wrong');
	          }
	      })   
  }

  $(document).on('change','#profile_image',function(){

  	 var formData = new FormData();
     formData.append('profile_image', $('#profile_image')[0].files[0]); 
     formData.append('_token', "{{ csrf_token() }}"); 
  		 $.ajax({
	          url:'/uploadProfileImage',
	          type:'post',
	          data:formData,
	          dataType:'JSON',
	          contentType: false,
              cache: false,
              processData:false,
	          async:false,
	          success:function(res){
	              if(res.status==0){    
	                  alert('Please Try Again ');
	              }else if(res.status==1){  
	              	var image = "{{asset('images/profile')}}";
	              	$('#display_image').attr('src',image+'/'+res.image_path);
	                  alert('Profile Image Upload successfully');
	              }
	          },
	          error:function(){
	               alert('Something Went Wrong');
	          }
	      })   

  });
</script>

@endsection
