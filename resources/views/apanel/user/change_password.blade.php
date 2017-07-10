@extends('apanel.master')
@section('title', 'Change Password')
@section('content')
   
   <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/parsley.css">

    <section class="content-header">
      <h1>  Change Password
      </h1>
      
    </section>

  @if(Session::has('s'))
      <div class="alert alert-success" style="width:auto;float:right"><span class="glyphicon glyphicon-ok"></span><em> {!! session('s') !!}</em></div>
 @endif

  @if(Session::has('e'))
      <div class="alert alert-error" style="width:auto;float:right"><span class="glyphicon glyphicon-ok"></span><em> {!! session('e') !!}</em></div>
  @endif

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
        <div class="col-md-12">
       <div class="box box-primary">
            
           
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/apanel/updatePassword" data-parsley-validate >
              <div class="box-body">
                
                 {!! csrf_field() !!}
                <div class="form-group">
                    <label for="exampleInputPassword1">Old Password</label>
                    <input type="password" class="form-control" id="old_password" placeholder="Enter Old Password" data-parsley-required="true" name="old_password" data-parsley-trigger="change">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" data-parsley-minlength="6" data-parsley-required="true" data-parsley-trigger="change"> 
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Re-Enter Password</label>
                    <input type="password" class="form-control" id="confirm_password" placeholder="Re-Enter Password" data-parsley-equalto="#password" data-parsley-required="true" data-parsley-trigger="change" name="confirm_password" >
                </div>
                 

              
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" id="save_btn" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
     
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

    @endsection


@section('footer')

<script src="{{ asset('admin') }}/dist/js/parsley.js"></script> 



@endsection 
