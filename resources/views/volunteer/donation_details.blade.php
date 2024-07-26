@php
    $userId = session('user_id');
	$v_id = session('volunteer_id');
   //echo $v_id;die;
@endphp
<!doctype html>
<html lang="zxx">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Helping-Hand(NGO)
    </title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/style-starter.css')}}">
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
        
          <div class="col-lg-12 form-inner-cont">
          <div class="title-content text-left">
            <h3 class="hny-title mb-lg-5 mb-4">Your Donation Post</h3>
          </div>
         <table class="table" align="center">
							<thead>
								<tr>
								  <td>D_Id</td>
								  <td>{{$donation->D_id}}</td>

								</tr>
								<tr>
								  <td>Title</td>
								  <td>{{$donation->Title}}</td>
								 
								</tr>
								<tr>
								  <td>Description</td>
								  <td>{{$donation->Description}}</td>
								 
								</tr>
							
								<tr>
									<td>Date</td>
									<td>{{$donation->donation_date}}</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>{{$donation->address}}</td>
								</tr>
								
								
								<tr>
									<td>Status</td>
									<td>{{$donation->status}}</td>
								</tr>
							
								<tr>
									<td>Contact_name</td>
									<td>{{$donation->contact_name}}</td>
								</tr>
								<tr>
									<td>Contact_number</td>
									<td>{{$donation->contact_person}}</td>
								</tr>
								<tr>
									<td>From Time</td>
									<td>{{$donation->From_time}}</td>
								</tr>
								<tr>
									<td>To Time</td>
									<td>{{$donation->To_Time}}</td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<a href="{{ route('Accept_Donation', ['d_id' => $donation->D_id, 'v_id' => $v_id]) }}"><button class="btn btn-success">Accept</button></a></td>
					                
								</tr>
							</thead>
							
						</table>
        </div>
        </div>
      </div>
      </div>
     <!-- <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5832020013786!2d72.62799931496815!3d23.039070984944615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8691219fcc49%3A0x3b9e0bbd566d855d!2sBrainKlick%20Technologies!5e0!3m2!1sen!2sin!4v1672226949385!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
    </section>
  <!-- //contact-form -->
  <!-- footer-66 -->

  @include('user.comman.footer')
  <!--//footer-66 -->
</body>

</html>

<script src="{{asset('user/assets/js/jquery-3.3.1.min.js')}}"></script>
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
<!--//MENU-JS--><script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>