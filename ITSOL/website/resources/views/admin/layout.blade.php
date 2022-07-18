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
    <link href="/admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin_theme/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin_theme/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/admin_theme/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/admin_theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/admin_theme/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin_theme/build/css/custom.min.css" rel="stylesheet">
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
                  <li><a> Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_banner')}}">View Banner</a></li>
                      <li><a href="{{('create_banner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                
                  <li><a><i></i> Services <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_homesection2')}}">View Services</a></li>
                      <li><a href="{{('create_homesection2')}}">Create Services</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Features <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_homesection3')}}">View Features</a></li>
                      <li><a href="{{('create_homesection3')}}">Create Features</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i></i> Consultation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_homesection4')}}">View Consultation</a></li>
                      <li><a href="{{('create_homesection4')}}">Create Consultation</a></li>
                    </ul>
                  </li>

                  <li><a><i></i> Portfolio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_homesection5')}}">View Images</a></li>
                      <li><a href="{{('create_homesection5')}}">Add Image</a></li>
                    </ul>
                  </li>

                  <li><a><i></i> Testimonial <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_homesection6')}}">View testimonial</a></li>
                      <li><a href="{{('create_homesection6')}}">Create testimonial</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Sponsers <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_homesection8')}}">View Sponsers</a></li>
                      <li><a href="{{('create_homesection8')}}">Create Sponsers</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Home Blogs View <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_homesection7')}}">View blogs</a></li>
                      <li><a href="{{('create_homesection7')}}">Create blogs</a></li>
                    </ul>
                  </li>
                 
                  <li><a> About Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_aboutbanner')}}">View Banner</a></li>
                      <li><a href="{{('create_aboutbanner')}}">Create Banner</a></li>
                    </ul>
                  </li>

                  <li><a><i></i> About services Section <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_aboutsection2')}}">View Services</a></li>
                      <li><a href="{{('create_aboutsection2')}}">Create Services</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> About Skills <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_aboutsection3')}}">View Skills</a></li>
                      <li><a href="{{('create_aboutsection3')}}">Add Skills</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> About Expertise <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_aboutsection4')}}">View Expertise</a></li>
                      <li><a href="{{('create_aboutsection4')}}">Add Expertise</a></li>
                    </ul>
                  </li>
                  <li><a> Team Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_teambanner')}}">View Banner</a></li>
                      <li><a href="{{('create_teambanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Team Members <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_teamsection2')}}">View Team</a></li>
                      <li><a href="{{('create_teamsection2')}}">Create Team Member</a></li>
                    </ul>
                  </li>
                  <li><a> Testimonial Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_testimonialbanner')}}">View Banner</a></li>
                      <li><a href="{{('create_testimonialbanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Clients Reviews <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_testsection2')}}">View Reviews</a></li>
                      <li><a href="{{('create_testimonialsection2')}}">Add Reviews</a></li>
                    </ul>
                  </li>
                  
                  <li><a> Services Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_servicebanner')}}">View Banner</a></li>
                      <li><a href="{{('create_servicebanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Services Plans <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_monthlyplan')}}">View Monthly Plan</a></li>
                      <li><a href="{{('view_yearlyplan')}}">View Yearly Plan</a></li>
                      <li><a href="{{('create_monthlyplan')}}">Add Plan</a></li>
                    </ul>
                  </li>
                  <li><a> Portfolio Three Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_portfoliobanner')}}">View Banner</a></li>
                      <li><a href="{{('create_portfoliobanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a><i></i>Our Portfolio Gallery<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_gallery')}}">View Gallery</a></li>
                      <li><a href="{{('create_gallery')}}">Add Photo</a></li>
                    </ul>
                  </li>
                  <li><a> Single Portfolio Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_portbanner')}}">View Banner</a></li>
                      <li><a href="{{('create_portbanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Single Portfolio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_portsection2')}}">View Portfolio</a></li>
                      <li><a href="{{('create_portsection2')}}">Add Portfolio</a></li>
                    </ul>
                  </li>
                  <li><a><i></i> Single Portfolio Images<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_portsection3')}}">View Images</a></li>
                      <li><a href="{{('create_portsection3')}}">Add Images</a></li>
                    </ul>
                  </li>
                  <li><a> Blog List Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_bloglistbanner')}}">View Banner</a></li>
                      <li><a href="{{('create_bloglistbanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a><i></i>Blog List<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_blogsection2')}}">View List</a></li>
                      <li><a href="{{('create_blogsection2')}}">Add List</a></li>
                    </ul>
                  </li>
                  <li><a> Blog Single Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_blogbanner')}}">View Banner</a></li>
                      <li><a href="{{('create_blogbanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a> Add Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_blog')}}">View Blogs</a></li>
                      <li><a href="{{('create_blog')}}">Create Blog</a></li>
                    </ul>
                  </li>
                  <li><a> Contact Banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_contactbanner')}}">View Banner</a></li>
                      <li><a href="{{('create_contactbanner')}}">Create Banner</a></li>
                    </ul>
                  </li>
                  <li><a> Contact Detail <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_contactdetails')}}">View Details</a></li>
                      <li><a href="{{('create_contactdetails')}}">Create Details</a></li>
                    </ul>
                  </li>
                  <li><a> Catagory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{('view_catagory')}}">View Catagories</a></li>
                      <li><a href="{{('create_catagory')}}">Create Catagory</a></li>
                    </ul>
                  </li>
                  
                  <li><a href="{{('add_team_banner')}}"><i></i>Our Team banner section<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_teamsection2')}}"><i></i>Our Team Section 2<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_teamsection3')}}"><i></i>Our Team Section 3<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_testimonial_banner')}}"><i></i>Testimonial Banner<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_testimonialsection2')}}"><i></i>Testimonial Section 2<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_services_banner')}}"><i></i>Services Banner<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_servicesection2')}}"><i></i>Services Section 2<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_servicesection3')}}"><i></i>Services Section 3<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_servicesection4')}}"><i></i>Services Section 4<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_portfolio3_banner')}}"><i></i>Portfolio 3 Col Banner<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_portfolio3_section2')}}"><i></i>Portfolio 3 Col Section 2<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_portfolio3_section3')}}"><i></i>Portfolio 3 Col Section 3<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_portfoliosingle_banner')}}"><i></i>Portfolio Single Banner<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_portfolio_section2')}}"><i></i>Portfolio Single Section 2<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_portfolio_section3')}}"><i></i>Portfolio Single Section 3<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_portfolio_section4')}}"><i></i>Portfolio Single Section 4<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_bloglistbanner')}}"><i></i>Blog List Banner<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_bloglist_section2')}}"><i></i>Blog List Section 2<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_contactbanner')}}"><i></i>Contact Us Banner<span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{('add_contactsection2')}}"><i></i>Contact Section 2<span class="fa fa-chevron-down"></span></a>
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
