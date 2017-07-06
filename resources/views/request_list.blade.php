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
			
			<div class="society-members-content">
				<h4 class="list-title">Request List</h4>
				<div class="list-content">
					<ul>

					@if(isset($t_user_requests) && !empty($t_user_requests))
						@foreach($t_user_requests as $t_user_request)

						
						<li class="single_user" id="{{$t_user_request['id']}}" receiver_user_id="{{$t_user_request['user_id']}}">
							<div class="member-img">
							<img height="40" src="{{(!empty($t_user_request['profile_image'])) ? asset('images/profile/'.$t_user_request['profile_image']) : asset('images/default-user.png') }}">	
							</div>
							<div class="member-details clearfix">
								<div class="detail-content">
									<h4>{{ $t_user_request['name'] }}</h4>
									<p>{{ $t_user_request['user_description'] }}</p>
								</div>
								<div class="button-content">
									<button class="view-profile-btn accept_request">Accept Request</button>
									<button style="margin-top:10px" class="view-profile-btn reject_request">Reject Request</button>
								</div>
							</div>
						</li>

						@endforeach

					@else
						No Record Found
					@endif
						
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>

<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="{{ asset('admin') }}/plugins/jQueryUI/jquery-ui.min.js"></script>

<script type="text/javascript">
	
	 

  	
  	

  $(document).on('click','.accept_request',function(){
  	var self = this;
		 $.ajax({
	          url:'/actionRequest',
	          type:'post',
	          data:{status:1,receiver_user_id:$(self).closest('.single_user').attr('receiver_user_id'),id:$(self).closest('.single_user').attr('id'),_token: "{{ csrf_token() }}"},
	          dataType:'JSON',
	          async:false,
	          success:function(res){
	              if(res.status==1){   
	              	  $(self).closest('.single_user').remove();                   
	                  alert('Request Accepted');
	              }else if(res.status==0){                      
	                  alert('Request not accepted');
	              }
	          },
	          error:function(){
	               alert('Something Went Wrong');
	          }
	      })   
  });


  $(document).on('click','.reject_request',function(){
  	var self = this;
		 $.ajax({
	          url:'/actionRequest',
	          type:'post',
	          data:{status:2,id:$(self).closest('.single_user').attr('id'),_token: "{{ csrf_token() }}"},
	          dataType:'JSON',
	          async:false,
	          success:function(res){
	              if(res.status==1){  
	              	  $(self).closest('.single_user').remove();                       
	                  alert('Request Rejected');
	              }else if(res.status==0){                      
	                  alert('Request not Rejected');
	              }
	          },
	          error:function(){
	               alert('Something Went Wrong');
	          }
	      })   
  });
</script>

@endsection
