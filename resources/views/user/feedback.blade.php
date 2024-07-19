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
    <title>Feedback
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
  <!-- /contact-form -->
  <section class="w3l-contact-11">
    <div class="form-41-mian py-5">
      <div class="container py-lg-4">
        <div class="row align-form-map">
        <div class="col-md-6 col-lg-6 col-xl-6"><br><br><br>
				        <img src="user/assets/images/feed_back.png" class="img-fluid" style="height: 300px; ">
				      </div>
        <div class="col-lg-6 form-inner-cont">
          <div class="title-content text-left">
            <h3 class="hny-title mb-lg-5 mb-4">Send Feedback</h3>
          </div>
          <form  method="post" class="feedback-form" action="{{url('/store_Feedback/'.$userId)}}">
            @csrf
        <div class="form-input">
            <select class="form-control" id="rating" name="rating" >
              <option value="">Please Select Rating...</option>
              <option value="1">    1   </option>
              <option value="2">    2   </option>
              <option value="3">    3   </option>
              <option value="4">    4   </option>
              <option value="5">    5   </option>
              
            </select>
           
          
    
          <br>  <textarea placeholder="comment" id="comment" name="comment" required=""></textarea>
        
          </div>
          <div class="submit-button text-lg-center">
             <button type="submit" class="btn btn-style" name="submit" id="submit">Submit</button>
            </div>
          </form>
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