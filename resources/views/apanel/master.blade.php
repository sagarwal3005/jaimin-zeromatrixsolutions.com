<html>
    <head>


<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <title>@yield('title')</title> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('admin') }}/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">  -->

  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/font-awesome.min.css">
  <!-- Ionicons -->
 <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <!-- Daterange picker -->
  <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="{{ asset('admin') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- jQuery 2.2.3 -->
<script src="{{ asset('admin') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="{{ asset('admin') }}/plugins/jQueryUI/jquery-ui.min.js"></script>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">


		  <header class="main-header">
		    <!-- Logo -->
		     <a href="" class="logo">
		      <!-- mini logo for sidebar mini 50x50 pixels -->
		      <span class="logo-mini"><b>A</b>LT</span>
		      <!-- logo for regular state and mobile devices -->
		      <span class="logo-lg"><b>Admin</b> Panel </span>
		    </a>
		    <!-- Header Navbar: style can be found in header.less -->
		    <nav class="navbar navbar-static-top">
		      <!-- Sidebar toggle button-->
		      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		        <span class="sr-only">Toggle navigation</span>
		      </a>

		      <div class="navbar-custom-menu">
		        <ul class="nav navbar-nav">
		          <!-- Messages: style can be found in dropdown.less-->
		          
		          <!-- Notifications: style can be found in dropdown.less -->
		         
		          <!-- Tasks: style can be found in dropdown.less -->
		         
		          <!-- User Account: style can be found in dropdown.less -->
		          <li class="dropdown user user-menu">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		              <img src="{{ asset('admin') }}/dist/img/logo.png" class="user-image" alt="User Image">
		              <span class="hidden-xs">Admin</span>
		            </a>
		            <ul class="dropdown-menu">
		              <!-- User image -->
		              <!-- <li class="user-header">
		                

		                <p>
		                  Alexander Pierce - Web Developer
		                </p>
		              </li> -->
		              <!-- Menu Body -->
		             
		              <!-- Menu Footer-->
		              <li class="user-footer">
		                <div class="pull-left">
		                  <a href="/apanel/changePassword" class="btn btn-default btn-flat">Change Password</a>
		                </div>
		                <div class="pull-right">
		                  <a href="/apanel/logout" class="btn btn-default btn-flat">Sign out</a>
		                </div>
		              </li>
		            </ul>
		          </li>
		          <!-- Control Sidebar Toggle Button -->
		          
		        </ul>
		      </div>
		    </nav>
		  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin') }}/dist/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
           <i class="fa fa-building" aria-hidden="true"></i><span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="/apanel/category/add"><i class="fa fa-circle-o"></i> Add Category</a></li>
            <li><a href="/apanel/category/index"><i class="fa fa-circle-o"></i> List Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
           <i class="fa fa-building" aria-hidden="true"></i><span>Society</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="/apanel/society/add"><i class="fa fa-circle-o"></i> Add Society</a></li>
            <li><a href="/apanel/society/index"><i class="fa fa-circle-o"></i> List Society</a></li>
          </ul>

          <li ><a href="/apanel/user/index"><i class="fa fa-user"></i>List User</a></li>
        </li>
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

        
        <div class="content-wrapper">
            @yield('content')
        </div>
        


        </div>
    </body>

    
<!-- jQuery UI 1.11.4 -->
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
 --><!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admin') }}/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->

<!-- Sparkline -->
<script src="{{ asset('admin') }}/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin') }}/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script> -->

<!-- <script src="/plugins/daterangepicker/daterangepicker.js"></script>
 --><!-- datepicker -->
<!-- <script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
 --><!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
 <!-- Slimscroll -->
<script src="{{ asset('admin') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('admin') }}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin') }}/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin') }}/dist/js/demo.js"></script>


@yield('footer')
</html>