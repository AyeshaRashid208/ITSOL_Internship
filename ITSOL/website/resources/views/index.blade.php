<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Interact Tech Solution</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="icon" href="images/fivi.png" type="image/x-icon">

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

										<li class="current "><a href="{{url('home')}}">Home</a>

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
	
	<!-- Banner Section Two -->
	<section class="banner-section-two">
		<div class="image-layer" style="background-image:url(images/background/5.png)"></div>
		<div class="auto-container">
			<div class="clearfix">
			
				<div class="content">
					<h1>{{ $users->title}}</h1>
					<div class="text">{{ $users->description}}</div>
					<a href="#" class="theme-btn btn-style-three">Hire us today <span class="fa fa-arrow-right"></span></a>
				</div>
			
			</div>
			<div class="image-box">
				<figure class="image">
					<img src="images/resource/image-3.png" alt="">
				</figure>
			</div>
		</div>
	</section>
	<!-- End Banner Section Two -->
	
	<!-- Services Carousel Section -->
	<section class="services-carousel-section">
		<div class="outer-container">
			<div class="big-title">Services</div>
			<div class="five-item-carousel owl-carousel owl-theme">
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-target-1"></span>
						</div>
						<h5><a href="{{url('services')}}">Market <br> Research</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-line-chart-1"></span>
						</div>
						<h5><a href="{{url('services')}}">Web <br> Development</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-growth-1"></span>
						</div>
						<h5><a href="{{url('services')}}">Strategy & <br> Planning</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-supermarket"></span>
						</div>
						<h5><a href="{{url('services')}}">Growth <br> Tracking</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-monitor-1"></span>
						</div>
						<h5><a href="{{url('services')}}">Enterprise <br> Consulting</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-target-1"></span>
						</div>
						<h5><a href="{{url('services')}}">Market <br> Research</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-line-chart-1"></span>
						</div>
						<h5><a href="{{url('services')}}">{{$second->title}}</a></h5>
						<div class="text">{{$second->description}}</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-growth-1"></span>
						</div>
						<h5><a href="{{url('services')}}">Strategy & <br> Planning</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-supermarket"></span>
						</div>
						<h5><a href="{{url('services')}}">Growth <br> Tracking</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
				<!-- Services Block Three -->
				<div class="services-block-three">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-monitor-1"></span>
						</div>
						<h5><a href="{{url('services')}}">Enterprise <br> Consulting</a></h5>
						<div class="text">We’re full service which means...</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Services Carousel Section -->
	
	<!-- Devoted Section -->
	<section class="devoted-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<<!-- div class="big-title">About us</div> -->
				
				<div class="title">{{$third->message}}</div>
				<h2>{{$third->main_title}}</h2>
			</div>
			
			<!-- Devoted Info Tabs -->
			<div class="devoted-info-tabs">
				<!-- Devoted Tabs -->
				<div class="devoted-tabs tabs-box">

					<!--Tab Btns-->
					<div class="btns-outer">
						<ul class="tab-btns tab-buttons clearfix">
							<li data-tab="#prod-turnaround" class="tab-btn active-btn">{{$third->tab_one_name}}</li>
							<li data-tab="#prod-award" class="tab-btn">{{$third->tab_two_name}}</li>
							<li data-tab="#prod-design" class="tab-btn">{{$third->tab_three_name}}</li>
						</ul>
					</div>
					
					<!--Tabs Container-->
					<div class="tabs-content">
						
						<!--Tab / Active Tab-->
						<div class="tab active-tab" id="prod-turnaround">
							<div class="content">
								<div class="row clearfix">

									<!-- Content Column -->
									<div class="content-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<h5>{{$third->tab_one_heading}}</h5>
											<div class="text">{{$third->tab_one_desc}}</div>
											
											<!--Accordian Box-->
											<ul class="accordion-box style-two">

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>{{$third->tab_one_sub_heading_one}}</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>{{$third->tab_one_sub_heading_one_desc}}</p>
															</div>
														</div>
													</div>
												</li>

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Machine learning shows potential to leverage?</div>
													<div class="acc-content current">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>
												
												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>So some forward-looking CIOs are putting?</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>

											</ul>
											
											<a href="{{url('about')}}" class="theme-btn btn-style-four">about us</a>
											
										</div>
									</div>
									
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<div class="image">
												<img src="images/resource/devoted-1.png" alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!--Tab-->
						<div class="tab" id="prod-award">
							<div class="content">
								<div class="row clearfix">

									<!-- Content Column -->
									<div class="content-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<h5>We have digital experiences. With more than ten years of knowledge and expertise we design.</h5>
											<div class="text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed.We do live art, illustration, web design, App design.</div>
											
											<!--Accordian Box-->
											<ul class="accordion-box style-two">

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Solutions is the latest software Sigma?</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Machine learning shows potential to leverage?</div>
													<div class="acc-content current">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>
												
												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>So some forward-looking CIOs are putting?</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>

											</ul>
											
											<a href="{{url('about')}}" class="theme-btn btn-style-four">about us</a>
											
										</div>
									</div>
									
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<div class="image">
												<img src="images/03.png" alt="" />
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<!--Tab-->
						<div class="tab" id="prod-design">
							<div class="content">
								<div class="row clearfix">

									<!-- Content Column -->
									<div class="content-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<h5>We have digital experiences. With more than ten years of knowledge and expertise we design.</h5>
											<div class="text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed.We do live art, illustration, web design, App design.</div>
											
											<!--Accordian Box-->
											<ul class="accordion-box style-two">

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Solutions is the latest software Sigma?</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>

												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Machine learning shows potential to leverage?</div>
													<div class="acc-content current">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>
												
												<!--Block-->
												<li class="accordion block">
													<div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>So some forward-looking CIOs are putting?</div>
													<div class="acc-content">
														<div class="content">
															<div class="text">
																<p>The argument in favor of using to filler text goes something  is that anybody can do it.</p>
															</div>
														</div>
													</div>
												</li>

											</ul>
											
											<a href="{{url('about')}}" class="theme-btn btn-style-four">about us</a>
											
										</div>
									</div>
									
									<!-- Image Column -->
									<div class="image-column col-lg-6 col-md-12 col-sm-12">
										<div class="inner-column">
											<div class="image">
												<img src="images//04.png" alt="" />
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>

				</div>
			</div>
			<!-- End Devoted Info Tabs -->
			
		</div>
	</section>
	<!-- End Devoted Section -->
	
	<!-- Steps Section -->
	<section class="steps-section-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="big-title">process</div>
				<div class="title">Steps for done</div>
				<h2>Easy steps to do <br> consult with <span>us</span></h2>
			</div>
			
			<!-- Outer Container -->
			<div class="outer-container">
				<div class="row clearfix">
					
					<!-- Step Block -->
					<div class="step-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="icon-outer">
								<div class="service-number">1</div>
								<div class="icon-box">
									<span class="icon flaticon-contact"></span>
								</div>
							</div>
							<div class="lower-box">
								<h5><a href="{{url('contact')}}">Contact us first</a></h5>
								<div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
								<a class="contact" href="{{url('contact')}}">Contact us <span class="arrow fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					
					<!-- Step Block -->
					<div class="step-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="icon-outer">
								<div class="service-number">2</div>
								<div class="icon-box">
									<span class="icon flaticon-network-1"></span>
								</div>
							</div>
							<div class="lower-box">
								<h5><a href="{{url('contact')}}">Consult with us</a></h5>
								<div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
								<a class="contact" href="{{url('contact')}}">Appoinment <span class="arrow fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					
					<!-- Step Block -->
					<div class="step-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="icon-outer">
								<div class="service-number">3</div>
								<div class="icon-box">
									<span class="icon flaticon-target"></span>
								</div>
							</div>
							<div class="lower-box">
								<h5><a href="{{url('contact')}}">Place Order</a></h5>
								<div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
								<a class="contact" href="{{url('contact')}}">Order now <span class="arrow fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					
					<!-- Step Block -->
					<div class="step-block col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="icon-outer">
								<div class="service-number">4</div>
								<div class="icon-box">
									<span class="icon flaticon-banknote"></span>
								</div>
							</div>
							<div class="lower-box">
								<h5><a href="#">Make Payment</a></h5>
								<div class="text">Lorem ipsum dolor sit amet, csectetur adipis icing.</div>
								<a class="contact" href="#">Payment <span class="arrow fa fa-angle-right"></span></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Steps Section -->
	
	<!-- Portfolio Section -->
	<section class="portfolio-section">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="big-title">wORK</div>
				<div class="title">our portfolio</div>
				<h2>We are popular for <br> our recent <span>works</span></h2>
				<div class="text">Lorem ipsum, or lipsum as it is sometimes known, is dummy <br> text used in laying out. The passage is attributed. </div>
			</div>
			
		</div>
		
		<!-- Outer Container -->
		<div class="outer-container">
			<div class="clearfix">

				<!-- Carousel Column -->
				<div class="carousel-column">
					<div class="inner-column">
						<div class="screenshot-carousel owl-carousel owl-theme">
							
							<div class="image">
								<img src="images/resource/screenshot-1.jpg" alt="" />
							</div>
							
							<div class="image">
								<img src="images/resource/screenshot-2.jpg" alt="" />
							</div>
							
							<div class="image">
								<img src="images/resource/screenshot-3.jpg" alt="" />
							</div>
							
							<div class="image">
								<img src="images/resource/screenshot-1.jpg" alt="" />
							</div>
							
							<div class="image">
								<img src="images/resource/screenshot-2.jpg" alt="" />
							</div>
							
							<div class="image">
								<img src="images/resource/screenshot-3.jpg" alt="" />
							</div>
							
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column">
					<div class="image-layer" style="background-image:url(images/background/6.png)"></div>
					<div class="inner-column">
						<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-button"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
						<h2>Check our recent <br> video <span>inspiration</span></h2>
						<div class="image">
							<img src="images/resource/video-image.png" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</section>
	<!-- End Portfolio Section -->
	
	<!-- Testimonial Section Two -->
	<section class="testimonial-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title text-center">
				<div class="big-title">Review</div>
				<div class="title">Tetimonils</div>
				<h2>Learn something <br> from our <span>clients</span></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="circle-box"></div>
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="image-outer">
							<a href="#" class="social-icon dribble fa fa-dribbble"></a>
							<div class="image">
								<img src="images/resource/author-7.jpg" alt="" />
							</div>
						</div>
						<div class="text">Cookies are set through this site to recognise your repeat visits and preferences, serve more to relevant ads, facilitate.</div>
						<h5>Frederic Anderson</h5>
						<div class="designation">President</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="circle-box"></div>
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="image-outer">
							<a href="#" class="social-icon facebook fa fa-facebook"></a>
							<div class="image">
								<img src="images/resource/author-8.jpg" alt="" />
							</div>
						</div>
						<div class="text">Cookies are set through this site to recognise your repeat visits and preferences, serve more to relevant ads, facilitate.</div>
						<h5>Andrea Ramily</h5>
						<div class="designation">Founder</div>
					</div>
				</div>
				
				<!-- Testimonial Block Two -->
				<div class="testimonial-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="circle-box"></div>
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="image-outer">
							<a href="#" class="social-icon twitter fa fa-twitter"></a>
							<div class="image">
								<img src="images/resource/author-9.jpg" alt="" />
							</div>
						</div>
						<div class="text">Cookies are set through this site to recognise your repeat visits and preferences, serve more to relevant ads, facilitate.</div>
						<h5>Albert Chaucer</h5>
						<div class="designation">Albert Chaucer</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section Two -->
	
	<!--Sponsors Section-->
	<section class="sponsors-section alternate">
		<div class="auto-container">
			
			<div class="carousel-outer">
				<!--Sponsors Slider-->
				<ul class="sponsors-carousel owl-carousel owl-theme">
					<li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></div></li>
				</ul>
			</div>
			
		</div>
	</section>
	<!--End Sponsors Section-->
	
	<!-- News Section -->
	<section class="news-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Our expert team</div>
				<h2>We re dedic <br> our devoted srv <span>fetures</span></h2>
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('blog-single')}}"><img src="images/resource/news-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h6><a href="{{url('blog-single')}}">Top aide to possible contender forced to resign over creepy.</a></h6>
							<div class="clearfix">
								<div class="pull-left">
									<div class="author">
										<div class="image"><img src="images/resource/author-4.jpg" alt="" /></div>
										Rio Smith
									</div>
								</div>
								<div class="pull-right">
									<div class="post-time">10 hours ago</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('blog-single')}}"><img src="images/resource/news-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h6><a href="{{url('blog-single')}}">Thirty-two surrogate mothers charged with human trafficking.</a></h6>
							<div class="clearfix">
								<div class="pull-left">
									<div class="author">
										<div class="image"><img src="images/resource/author-5.jpg" alt="" /></div>
										Jhonny Rip
									</div>
								</div>
								<div class="pull-right">
									<div class="post-time">5 hours ago</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('blog-single')}}"><img src="images/resource/news-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h6><a href="{{url('blog-single')}}">Chinese clients have been released after agreeing to keep.</a></h6>
							<div class="clearfix">
								<div class="pull-left">
									<div class="author">
										<div class="image"><img src="images/resource/author-6.jpg" alt="" /></div>
										Mong Wanzhou
									</div>
								</div>
								<div class="pull-right">
									<div class="post-time">12 hours ago</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
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
</html>