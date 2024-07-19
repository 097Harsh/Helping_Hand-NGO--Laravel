<script>
        @if(session('success'))
            alert("{{ session('success') }}");
        @elseif(session('success_user'))
            alert("{{ session('success_user') }}");
        @elseif(session('success_volunteer'))
            alert("{{ session('success_volunteer') }}");
        @elseif(session('contact'))
            alert("{{ session('contact') }}");
        @elseif(session('feedback'))
            alert("{{ session('feedback') }}");
			@elseif(session('cancle'))
            alert("{{ session('cancle') }}");
        @elseif(session('donation'))
            alert("{{ session('donation') }}");
			@elseif(session('payment_success'))
			alert("{{ session('payment_success') }}");
        @endif
    </script>
<!doctype html>
<html lang="zxx">
@php
    $userId = session('user_id');
    //echo "User ID: $userId";
    //die();
@endphp
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Helping-Hand(NGO)
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="user/assets/css/style-starter.css">
	
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
	<!--header-->
	
	@include('user.comman.header')
	<!--/header-->
	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Actions speak louder than words! Give today.</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="{{route('register')}}">Volunteer</a>
											
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info  banner-view banner-top1 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Creative a Better Future through your Help</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.html">Volunteer</a>
											<a href="#small-dialog" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top2 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Actions speak louder than words! Give today.</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.html">Volunteer</a>
											<a href="#small-dialog1" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>
											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
				<div class="item">
					<li>
						<div class="slider-info banner-view banner-top3 bg bg2">
							<div class="banner-info">
								<div class="container">
									<div class="banner-info-bg">
										<h5>Creative a Better Future through your Help</h5>
										<div class="banner-buttons">
											<a class="btn btn-style btn-primary" href="services.html">Volunteer</a>
											<a href="#small-dialog2" class="popup-with-zoom-anim play-view">
												<span class="video-play-icon">
													<span class="fa fa-play"></span>
												</span>
												<h6>How We Works</h6>

											</a>
											<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
											<div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
												<iframe src="https://player.vimeo.com/video/164890650"
													allow="autoplay; fullscreen" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
			</div>
		</div>
	</section>
	<!-- //banner-slider-->
	<!-- //bottom-grids -->
	<div class="w3l-bottom-grids">
		<div class="container-fluid px-0">
			<div class="bottomhny-grids-sec">
				<div class="bottomhny-1">
					<div class="bottomhny-gd-ingf">
						<h4>Charity is a simple method to prove kindness</h4>
					</div>
				</div>
				<div class="bottomhny-1 bottomhny-2">
					<div class="bottomhny-gd-ingf">
						<h4>By giving a little, you will help out a lot.</h4>
					</div>
				</div>
				<div class="bottomhny-1 bottomhny-1-img">
					<div class="bottomhny-gd-ingf">

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- //bottom-grids -->

	<!-- /features-4 -->
	<section class="features-4">
		<div class="features4-block py-5">
			<div class="container py-lg-4">
				<div class="title-content text-center mb-lg-5 mt-4">
					<h6 class="sub-title">Why Choose Us</h6>
					<h3 class="hny-title">How Can Help?</h3>
					<p class="fea-para">Lorem illum facere aperiam consectetur adipisicing elit</p>
				</div>
				<div class="row features4-grids text-left mt-lg-6">
					<div class="col-lg-4 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-1">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-1"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="features4-rightinfo">
								<h5><a href="#URL">Give Donation</a></h5>
								<p>Help others and be happy ,and god will do the rest,and play your role in the constructive cause.</p>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-2">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-2"></div>
											<div class="ch-info-back">
												<h4>Volunteer</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="register.php">
										Become A Volunteer</a></h5>
								<p>Discover why some of the richest people in the world are not millionaires, they are volunteers,
do Small Things With Great Love,volunteering is a Work of Heart</p>

							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-3">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-3"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="#URL">
										Give Food and clothe donations..</a></h5>
								<p>Even the smallest of contributions are used to build a better future for tomorrow.</p>

							</div>
						</div>
					</div>
					<!--
						<div class="col-lg-3 col-md-6 features4-grid mt-4">
						<div class="features4-grid-inn">
							<div class="img-featured">
								<div class="ch-item ch-img-4">
									<div class="ch-info-wrap">
										<div class="ch-info">
											<div class="ch-info-front ch-img-4"></div>
											<div class="ch-info-back">
												<h4>Donate</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="features4-rightinfo">
								<h5><a href="#URL">
										Help For Education</a></h5>
								<p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>

							</div>
						</div>
					</div>
					 -->
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--//features-4 -->

	<!-- /specification-6-->
	<section class="w3l-specification-6">
		<div class="specification-6-mian py-5">
			<div class="container py-lg-5">
				<div class="row story-6-grids">
					<div class="col-lg-10 story-gd pl-lg-4  text-center mx-auto">
						<div class="title-content px-lg-5">
							<h6 class="sub-title" style="color:#FF4500 ">Our Organization</h6>
							<h3 class="hny-title two">Want to get involved?</h3>
							<p class="mt-3 mb-lg-5 px-lg-5 counter-para"> Volunteering can be provided with the organisations already working in the area of your interest or the volunteers.</p>
						</div>
						<div class="skill_info mt-lg-5 mt-4 pt-lg-4">
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">{{$users}}</p>
										<h4>Number of supporters</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">{{$m_donation}}</p>
										<h4>Fund raised</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">{{$donation}}</p>
										<h4>Other Doantions</h4>

									</div>
								</div>
							</div>
							<div class="stats_left">
								<div class="counter_grid">
									<div class="icon_info">
										<p class="counter">{{$volunteer}}</p>
										<h4>Volunteers Worldwide</h4>

									</div>
								</div>
							</div>
						</div>
						<br><br><br>
						<div class="title-content">
								<h6 class="sub-title" style="color: #FF4500;">Join Us</h6>
								<h3 class="hny-title two">Become A Volunteer</h3>
								<p class="counter-para">Join your hand with us for a better life and beautiful future</p>

							</div>
							<a href="{{route('login')}}" class="btn btn-style -btn mt-4">Donate Now</a>
							<a href="{{route('contact')}}" class="btn btn-style btn-primary mt-4">Inquiry </a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //specification-6-->
	<!--/blog-grids-home-->
	<!--<section class="bloghny-gds py-5">
		<div class="container py-lg-4">
			<div class="title-content text-left mb-lg-5 mb-4">
				<h6 class="sub-title">Latest Posts</h6>
				<h3 class="hny-title">News & Updates</h3>

			</div>
			<div class="row text-left img-grids">
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g1.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g2.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g3.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g4.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g5.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 maghny-gd-1">
					<div class="maghny-grid">
						<figure class="effect-lily">
							<img class="img-fluid" src="assets/images/g6.jpg" alt="" />
							<figcaption>
								<div>
									<h4>Partnering to create a community</h4>

									<p><span class="year">Apr 4th 2020</span> <span class="info">News, Updates</span>
									</p>
								</div>

							</figcaption>
						</figure>
					</div>
				</div>
			</div>

		</div>
		</div>
	</section>-->
	<!--//blog-grids-home-->
	<!-- middle -->
	<!--<div class="middle py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="welcome-left text-center py-3">
				<div class="title-content">
					<h6 class="sub-title">Join Us</h6>
					<h3 class="hny-title two">Become A Volunteer</h3>
					<p>Join your hand with us for a better life and beautiful future</p>

				</div>
				<a href="donate.php" class="btn btn-style transparent-btn mt-4 mr-sm-2">Donate Now</a>
				<a href="contact.php" class="btn btn-style btn-primary mt-4">Inquiry </a>
			</div>
		</div>
	</div>-->
	<!-- //middle -->
	<!--/testimonials-->
	<section class="w3l-testimonials">
		<div class="testimonials py-5">
			<div class="container text-center py-lg-3">
				<div class="title-content text-center mb-lg-5 mb-4">
					<h6 class="sub-title">Testimonials</h6>
					<h3 class="hny-title">What Our
						People Says?</h3>

				</div>
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="owl-testimonial owl-carousel owl-theme">
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="user/assets/images/f2.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">I was inspired to donate to Organization after hearing you talk so much about their work.</div>
									<div class="name">- Jemmy carter</div>

								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="user/assets/images/f4.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">Though I am unable to donate funds, I will donate my time as joining volunteer in NGO...</div>
									<div class="name">- John Balmer</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="user/assets/images/f3.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">I am feeling charitable this time of year, and I would love to make an event in your honor. can organization  support us..</div>
									<div class="name">- karen gillan</div>
								</div>
							</div>
							<div class="item">
								<div class="slider-info mt-lg-4 mt-3">
									<div class="img-circle">
										<img src="user/assets/images/f6.jpg" class="img-fluid rounded" alt="client image">
									</div>
									<div class="message">Many Are In Need Of Your Helping Hand.</div>
									<div class="name">- Tom cruise</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//testimonials-->

	<!-- footer-66 -->
	

	@include('user.comman.footer')
	<!--//footer-66 -->
</body>

</html>

<script src="user/assets/js/jquery-3.3.1.min.js"></script>

<!-- disable body scroll which navbar is in active -->
<script src="user/assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- stats -->
<script src="user/assets/js/jquery.waypoints.min.js"></script>
<script src="user/assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<script src="user/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-testimonial').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
</script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script src="user/assets/js/bootstrap.min.js"></script>