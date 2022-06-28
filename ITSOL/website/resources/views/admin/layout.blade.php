<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Interact Tech Solution | </title>

    <!-- Bootstrap -->
    <link href="admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin_theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin_theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="admin_theme/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="admin_theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="admin_theme/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin_theme/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Interact Tech Solution </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span><strong><h4>Welcome</h4></strong></span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{('add_banner')}}"><i></i> Banner <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a  href="{{('add_homesection2')}}" ><i></i> Home section 2 <span class="fa fa-chevron-down"></span></a>
                  
                  </li>
                  <li><a href="{{('add_homesection3')}}"><i></i> Home section 3 <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_homesection4')}}"><i></i> Home Section 4 <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_homesection5')}}"><i></i> Home Section 5 <span class="fa fa-chevron-down"></span></a>
                  </li> 
                  <li><a href="{{('add_homesection6')}}"><i></i> Home Section 6 <span class="fa fa-chevron-down"></span></a>
                  </li> 
                 
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')  
        </div>
        
    
      </div>
    </div>

    <!-- jQuery -->
    <script src="admin_theme/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="admin_theme/build/js/custom.min.js"></script>
	@stack('footer_scripts')
  </body>
</html>
