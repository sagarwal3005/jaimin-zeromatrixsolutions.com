
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SocialSoc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('admin') }}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/parsley.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/font-awesome.min.css">
  <!-- Ionicons -->
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>SocialSoc Admin Panel </b>
  </div>

   @if(Session::has('e'))
      <div class="alert alert-error" style="width:auto;float:center"><span class="glyphicon glyphicon-ok"></span><em> {!! session('e') !!}</em></div>
  @endif
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

     <form  method="post" action="{{ route('login/checkLogin') }}" data-parsley-validate >

    {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <!-- <input type="email" class="form-control" placeholder="Email"> -->
        <input id="username" type="text" name="username" placeholder="User Name" class="form-control" data-parsley-required="true" value="admin@gmail.com">
        <span class="glyphicon glyphicon-envelope form-control-feedback" ></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" value="111111" name="password" class="form-control" placeholder="Password" data-parsley-required="true">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

   <!--  <a href="#">I forgot my password</a><br> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admin') }}/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('admin') }}/plugins/iCheck/icheck.min.js"></script>
<script src="{{ asset('admin') }}/dist/js/parsley.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });


</script>

<script type="text/javascript">
        var err = '<?php echo (isset($_GET['err']) ? 1 : '' ) ?>';
        if(err){
            history.pushState('','','login.php');
            alert('Email or Password is Wrong.Please Try Again');
        }
        var logout = '<?php echo (isset($_GET['logout']) ? 1 : '' ) ?>';
        if(logout){
            history.pushState('','','login.php');
            alert('Logout Done Successfully.');
        }
    </script>
</body>
</html>
