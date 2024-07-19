@if(session('registered'))
<script>
  Swal.fire({
  title: "Registered",
  text: "You completed registration process!",
  icon: "success"
});
</script>
@endif
<!doctype html>
<html lang="zxx">


	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Helping-Hand(NGO)
		</title>
		<!-- Template CSS -->
		<link rel="stylesheet" href="user/assets/css/style-starter.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
		<!-- Template CSS -->
		<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
		<!-- Template CSS -->
	</head>

<body>

	

@include('user.comman.header')
<!--/header-->
<div class="inner-banner">
</div>
	<!-- /login-form -->
	<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-6 col-lg-6 col-xl-6">
        <img src="user/assets/images/login.png"
          class="img-fluid" style="height: 500px;">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1">
        <h3><center>Sign in</center></h3><br>
        <form method="post" action="{{ route('store_login') }}">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
          	<label class="form-label" for="email">Email </label>
            <input type="email" id="email" name="email" class="form-control form-control-lg" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
          	 <label class="form-label" for="pass">Password</label>
            <input type="password" id="pass" name="pass" class="form-control form-control-lg"  />
          </div>

          <div class="form-outline mb-4">
        <select class="form-control"  id="role" name="role">
         <option value="">--Select Role--</option>
                  @foreach ($roles as $role)
                      <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                  @endforeach
            </select>
        
        </div>
      

        
          <!-- Submit button -->
          <button type="submit" class="btn btn-style btn-lg btn-block" name="submit" id="submit">Sign in</button>
        </form><br>
        <h6>If you not register then register first...</h6><br>
        <a href="{{route('register')}}"><button type="submit" class="btn btn-style btn-lg btn-block">Sign up</button>
        </a>
      </div>
    </div>
  </div>
</section>
	<!-- //login-form -->
	<!-- footer-66 -->

    @include('user.comman.footer')
	<!--//footer-66 -->
</body>

</html>

<script src="user/assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

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