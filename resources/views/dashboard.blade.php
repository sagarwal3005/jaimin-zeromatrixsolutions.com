

@extends('layouts.authuser')

@section('content')
<div class="container-fluid">


	<div class="page-content">
		<div class="profile-content">
			
			<div class="society-members-content">
				<h4 class="list-title">Welcome {{Auth::User()->name}}</h4>
				
			</div>
			
		</div>
	</div>
</div>

<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
   <script src="{{ asset('admin') }}/plugins/jQueryUI/jquery-ui.min.js"></script>



@endsection
