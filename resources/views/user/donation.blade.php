@php
$userId = session('user_id');
//echo "User ID: $userId";
//die();
@endphp
<!doctype html>
<html lang="zxx">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Donation
    </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="user/assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
    <!-- Template CSS -->
  </head>

<body>

  <!--w3l-header-->
@include('user.comman.header')
<!--/header-->
<div class="inner-banner">
</div>
  <!-- /donation-form -->
  <section class="w3l-contact-11">
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
        <div class="col-lg-6 contact-left pr-lg-4">
           
     
        </div>
        
        <div class="col-lg-12 form-inner-cont">
          <div class="title-content text-left">
            <h3 class="hny-title mb-lg-5 mb-4">Please Donate</h3>
          </div>
          <form  method="post" class="signin-form" action="{{url('/store_donation/'.$userId)}}">
            @csrf
          <div class="container">
          <div class="col-lg-12 form-input">
                <div class="row con-two">
					<div class="col-lg-6 form-input">
                        <input type="text" name="c_name" id="c_name" placeholder="Contact Name" required="" />
					</div>
					<div class="col-lg-6 form-input">
                        <input type="text" name="c_number" id="c_number" placeholder="Contact Number" required="" />
					</div>
				</div>
            <input type="text" name="title" id="title" placeholder="title" required="" />
          
           <textarea name="desc" id="desc" placeholder="description"></textarea>

            <textarea name="add" id="add" placeholder="Address"></textarea>
          
         
          <br>
           
                <div class="row con-two">
					<div class="col-lg-6 form-input">
                        <select class="form-control"  id="city_id" name="city_id">
                        <option value="">--Select city--</option>
                                @foreach ($citys as $city)
                                    <option value="{{ $city->city_id }}">{{ $city->city_name }}</option>
                                @endforeach
                        </select>
					</div>
					<div class="col-lg-6 form-input">
                        <select class="form-control"  id="area_id" name="area_id">
                        <option value="">--Select area--</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->area_id }}">{{ $area->area_name }}</option>
                            @endforeach
                        </select>
					</div>
				</div>
          <br>
          <div class="row con-two">
					<div class="col-lg-6 form-input">
                        <label for="cat_id">Select Donation Categroy</label>
                        <select class="form-control"  id="cat_id" name="cat_id">
                                <option value="">--Select category--</option>
                                @foreach ($categorys as $category)
                                        <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
                                @endforeach
                        </select>
					</div>
					<div class="col-lg-6 form-input">
                        <label for="date">Choose Date for Donation:</label>
                        <input type="date" name="date" id="date" placeholder="Date" required="" />
                    </div>
				</div>
         
                <div class="row con-two">
					<div class="col-lg-6 form-input">
                        <label for="dtime">From time</label>
                        <input type="time" name="dtime" id="dtime" placeholder="Starttime" required="" />
					</div>
					<div class="col-lg-6 form-input">
                        <label for="etime">To time</label>
                        <input type="time" name="etime" id="etime" placeholder="Endtime" required="" />
					</div>
				</div>
					
          </div>
          <div class="submit-button text-lg-center">
             <button type="submit" class="btn btn-style" name="submit" id="submit">Submit</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      </div>
     
    </section>
  <!-- //contact-form -->
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