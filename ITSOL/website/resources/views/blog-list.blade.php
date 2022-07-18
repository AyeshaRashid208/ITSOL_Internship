<!DOCTYPE html>
<html>

<!-- Mirrored from html.themexriver.com/pixer/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 09:26:57 GMT -->
<head>
<meta charset="utf-8">
<title>Interact Tech Solution | Blog List</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/fivi.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
		<header class="main-header">

			<!--Header-Upper-->
			<div class="header-upper">
				<div class="auto-container">
					<div class="clearfix">

						<div class="pull-left logo-box">
							<div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
						</div>

						<div class="nav-outer clearfix">

							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="{{url('home')}}">Home</a>

										</li>
										<li class="dropdown"><a href="#">About Us</a>
											<ul>
												<li><a href="{{url('about')}}">About Us</a></li>
												<li><a href="{{url('team')}}">Our Team</a></li>
												<li><a href="{{url('testimonial')}}">Testimonial</a></li>
											</ul>
										</li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li class="dropdown"><a href="#">Portfolio</a>
											<ul>
												<!-- <li><a href="portfolio-2-column.html">Portfolio Two Column</a></li> -->
												<li><a href="{{url('portfolio-3-column')}}">Portfolio Three Column</a></li>
												<!-- <li><a href="portfolio-4-column.html">Portfolio Four Column</a></li> -->
												<li><a href="{{url('portfolio-single')}}">Portfolio Single</a></li>
											</ul>
										</li>
										<li class="current dropdown"><a href="#">Blog</a>
											<ul>
												<li><a href="{{url('blog-list')}}">Blog List</a></li>
												<li><a href="{{url('blog-single')}}">Blog Single</a></li>
											</ul>
										</li>
										<li><a href="{{url('contact')}}">Contact us</a></li>
									</ul>
								</div>

							</nav>

						</div>

					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!--Sticky Header-->
			<div class="sticky-header">
				<div class="auto-container clearfix">
					<!--Logo-->
					<div class="logo pull-left">
						<a href="index.html" class="img-responsive"><img src="images/logo.png" alt="" title=""></a>
					</div>

					<!--Right Col-->
					<div class="right-col pull-right">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
							<ul class="navigation clearfix">
										<li ><a href="{{url('home')}}">Home</a>

										</li>
										<li class="dropdown"><a href="#">About Us</a>
											<ul>
												<li><a href="{{url('about')}}">About Us</a></li>
												<li><a href="{{url('team')}}">Our Team</a></li>
												<li><a href="{{url('testimonial')}}">Testimonial</a></li>
											</ul>
										</li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li class="dropdown"><a href="#">Portfolio</a>
											<ul>
												<!-- <li><a href="portfolio-2-column.html">Portfolio Two Column</a></li> -->
												<li><a href="{{url('portfolio-3-column')}}">Portfolio Three Column</a></li>
												<!-- <li><a href="portfolio-4-column.html">Portfolio Four Column</a></li> -->
												<li><a href="{{url('portfolio-single')}}">Portfolio Single</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="#">Blog</a>
											<ul>
												<li><a href="{{url('blog-list')}}">Blog List</a></li>
												<li><a href="{{url('blog-single')}}">Blog Single</a></li>
											</ul>
										</li>
										<li class="current "><a href="{{url('contact')}}">Contact us</a></li>
									</ul>
						</div>
					</nav><!-- Main Menu End-->
				</div>

			</div>
		</div>
		<!--End Sticky Header-->
		
	</header>
	<!--End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.png)">
    	<div class="auto-container">
			<div class="content">
				<h1> <span>{{$banner->title}}</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>blog</li>
					<li>blog list</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-list">
					@foreach($second as $second)
						<!-- News Block Two -->
						<div class="news-block-two">
							<div class="inner-box">
								<div class="images">
									<a href="blog-single.html"><img src="{{ asset('images/resource/'.$second->fimage) }}" alt="" /></a>
								</div>
								<div class="lower-content">
									<ul class="post-meta">
										<li class="style-two"><span class="icon fa fa-calendar"></span>{{$second->date}}</li>
										<li><span class="icon fa fa-user"></span>{{$second->name}}</li>
									</ul>
									<h4><a href="blog-single.html">{{$second->title}}</a></h4>
									<div class="text">{{substr($second->one, 0,  350)}}</div>
									<a href={{"full_blog/".$second['id']}} class="theme-btn btn-style-one">View more</a>
								</div>
							</div>
						</div>
						
					@endforeach
						
						<!--Styled Pagination-->
						<ul class="styled-pagination">
							<li><a href="#" class="active">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">05</a></li>
							<li><a href="#"><span class="fa fa-angle-double-right"></span></a></li>
						</ul>
						<!--End Styled Pagination-->
						
					</div>
				</div>
					
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						
						<!-- Search -->
                        <div class="sidebar-widget search-box">
                        	<form method="post" action="https://html.themexriver.com/pixer/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search..." required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div>
						
						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#">Consulting <span>(3)</span></a></li>
                                <li><a href="#">Technology <span>(4)</span></a></li>
                                <li><a href="#">Life style <span>(8)</span></a></li>
                            </ul>
                        </div>
						
						<!-- Popular Post Widget-->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h4>Recent News</h4>
                            </div>
							
							<article class="post">
								<figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								<div class="text"><a href="blog-single.html">Business structured nontp frank team</a></div>
								<div class="post-info">July 25, 2019</div>
							</article>
							
							<article class="post">
								<figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								<div class="text"><a href="blog-single.html">Meetups and parties at night for every...</a></div>
								<div class="post-info">July 26, 2019</div>
							</article>
							
							<article class="post">
								<figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
								<div class="text"><a href="blog-single.html">Always found him speakingas many...</a></div>
								<div class="post-info">July 25, 2019</div>
							</article>
							
						</div>
						
						<!--Archive Widget-->
                        <div class="sidebar-widget sidebar-blog-category archive-widget">
                            <div class="sidebar-title">
                                <h4>Archives</h4>
                            </div>
                            <ul class="blog-cat">
                                <li><a href="#">January 2019 <span>(3)</span></a></li>
                                <li><a href="#">February 2019 <span>(2)</span></a></li>
                                <li><a href="#">May 2019 <span>(6)</span></a></li>
                            </ul>
                        </div>
						
						<!--Gallery Widget-->
                        <div class="sidebar-widget instagram-widget">
                            <div class="sidebar-title">
                                <h4>Gallery</h4>
                            </div>
							<div class="images-outer clearfix">
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-1.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-2.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-3.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-4.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-5.jpg" alt=""></figure>
                                <!--Image Box-->
                                <figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-caption="" data-fancybox="images" title="Image Title Here" data-fancybox-group="footer-gallery"><span class="overlay-box flaticon-plus-symbol"></span></a>
                                <img src="images/gallery/instagram-6.jpg" alt=""></figure>
                            </div>
						</div>
						
						<!-- Tags Widget-->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title">
                                <h4>Tags</h4>
                            </div>
							<a href="#">Apps</a>
							<a href="#">Cloud</a>
							<a href="#">Life style</a>
							<a href="#">Hosting</a>
							<a href="#">Business</a>
						</div>
						
					</aside>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->
	
	<!--Main Footer-->
	<footer class="main-footer style-two">
		<div class="auto-container">
			<!--Widgets Section-->
			<div class="widgets-section">
				<div class="row clearfix">

					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-7 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="{{url('home')}}"><img src="images/footer-logo.png" alt="" /></a>
									</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
									<ul class="list-style-one">
										<li><span class="icon fa fa-phone"></span> +123 (4567) 890</li>
										<li><span class="icon fa fa-envelope"></span> info@its.com </li>
										<li><span class="icon fa fa-home"></span>380 St Dummy Road, lahore <br> VIC 3004, Pakistan</li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-5 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Links</h4>
									<ul class="list-link">
										<li><a href="{{url('home')}}">Home</a></li>
										<li><a href="{{url('services')}}">Services</a></li>
										<li><a href="{{url('about')}}">About us</a></li>
										<li><a href="{{url('testimonial')}}">Testimonials</a></li>
										<li><a href="#">News</a></li>
										<li><a href="{{url('contact')}}">Contact</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					
					<!--Column-->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h4>Support</h4>
									<ul class="list-link">
										<li><a href="{{url('contact')}}">Contact Us</a></li>
										<li><a href="#">Submit a Ticket</a></li>
										<li><a href="#">Visit Knowledge Base</a></li>
										<li><a href="#">Support System</a></li>
										<li><a href="#">Refund Policy</a></li>
										<li><a href="#">Professional Services</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget gallery-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/1.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/2.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/3.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/4.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/5.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a href="images/gallery/6.jpg" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container">
					<div class="row clearfix">
						<!-- Copyright Column -->
						<div class="copyright-column col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">2020 &copy; All rights reserved by <a href="#">ITS</a></div>
						</div>
						
						<!-- Social Column -->
						<div class="social-column col-lg-6 col-md-6 col-sm-12">
							<ul>
								<li class="follow">Follow us: </li>
								<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
								<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
								<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
								<li><a href="#"><span class="fa fa-google-plus-square"></span></a></li>
								<li><a href="#"><span class="fa fa-rss-square"></span></a></li>
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>

<!-- Mirrored from html.themexriver.com/pixer/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 09:27:29 GMT -->
</html>