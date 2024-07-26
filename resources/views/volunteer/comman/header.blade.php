@php
    $userId = session('user_id');
	$v_id = session('volunteer_id');
    //echo "User ID: $userId";
   /* 
    $user = new \App\Models\User();
	 // Adjust the namespace according to your User model location
    $userData = $user->getUserData($userId); // Assuming getUserData() is a method in your User model
		echo "<pre>";
	print_r($userData);die;	*/
@endphp

<header id="site-header" class="fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark stroke">
				<h1> <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('user/assets/images/logo1.png	')}}" alt="Your logo" title="Your logo" style="height:60px;" />
						 <span class="sub-logo">Helping-Hand</span>
					</a></h1>
				<!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
				<button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
					data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
					<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link" href="{{route('home')}}">Home <span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('about')}}">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}">Inquiry</a>
						</li>
						
							@if ($userId)
								<li class="nav-item">
									<a class="nav-link" href="{{route('feedback')}}">Feed-back</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{route('Donation')}}">Donation</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link donate btn btn-style" href="{{route('MoneyDonation')}}">Money-Donation</a>
								</li>
								<li class="nav-item">
									<div class="profile_details">		
										<ul>
											<li class="dropdown profile_details_drop">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<div class="profile_img">	
														<span class="prfil-img"><button class="btn btn-style dropdown-toggle"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Profile</button> </span> 
														
														<div class="clearfix"></div>	
													</div>	
												</a>
												<ul class="dropdown-menu drp-mnu">
													<li><a class="dropdown-item" href="{{route('MyDonation',$userId)}}"><i class="fa fa-user"></i> My Donation</a></li>
													<li><a class="dropdown-item" href="{{route('MyMoneyDonation',$userId)}}"><i class="fa fa-user"></i> My Money-Donation</a></li>
													<li class="dropdown-item">
														<form method="post" action="{{ route('logout') }}">
															@csrf
															<button type="submit" class="btn btn-style btn-block">Logout</button>
														</form>
													</li>
												</ul>

											</li>
										</ul>
									</div>
								</li>
							@elseif($v_id)
							<li class="nav-item">
									<a class="nav-link" href="{{route('volunteer_feedback')}}">Feedback</a>
								</li>
									<li class="nav-item">
										<a class="nav-link" href="post_donation.php">Donation post</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="my_post.php">My Post</a>
									</li>
									<li class="nav-item">
									<div class="profile_details">		
									<ul>
										<li class="dropdown profile_details_drop">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<div class="profile_img">	
													<span class="prfil-img"><button class="btn btn-style dropdown-toggle"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Profile</button> </span> 
													
													<div class="clearfix"></div>	
												</div>	
											</a>
											<ul class="dropdown-menu drp-mnu">
												<li> <a class="dropdown-item" href="my_post.php"><i class="fa fa-user"></i> My Post</a> </li>  
												<li> <a class="dropdown-item" href="m_volunteer_profile.php"><i class="fa fa-suitcase"></i> Edit Profile</a> </li> 
												<li class="dropdown-item">
													<form method="post" action="{{ route('logout') }}">
														@csrf
														<button type="submit" class="btn btn-style btn-block">Logout</button>
													</form>
												</li>
											</ul>

										</li>
									</ul>
								</div>
								</li>

							@else
								
								<li class="nav-item">
									<a class="nav-link" href="{{route('login')}}">Login</a>
								</li>
							@endif

						
						
								
								

						
						
									
								
								
							
						

					</ul>
				</div>
				
			</nav>
		</div>
	</header>