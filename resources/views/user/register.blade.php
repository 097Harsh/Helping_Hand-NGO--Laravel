<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Helping-Hand(NGO)</title>
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
    <div class="inner-banner"></div>
    <!-- /register-form -->
    <section class="w3l-contact-11">
        <div class="form-41-mian py-5">
            <div class="container py-lg-2">
                <div class="row align-form-map justify-content-center">
                    <div class="col-lg-12 form-inner-cont">
                        <div class="title-content text-left">
                            <h3 class="hny-title mb-lg-5 mb-4 text-center">Sign Up</h3>
                        </div>
                        <form method="post" class="signin-form" action="{{ route('store_register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-input mb-3">
                                <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter your name" required />
                            </div>
                            <div class="form-input mb-3">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required />
                            </div>
                            <div class="form-input mb-3">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required />
                            </div>
                            <div class="form-input mb-3">
                                <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter confirm password" required />
                            </div>
                            <div class="form-input mb-3">
                                <input type="text" name="contact" id="contact" class="form-control" maxlength="10" placeholder="Enter your contact" required />
                            </div>
                            <div class="form-input mb-3">
                                <label for="gender">Choose your gender:</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="male" name="gender" value="Male">
                                    <label class="custom-control-label" for="male">Male</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="female" name="gender" value="Female">
                                    <label class="custom-control-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-input mb-3">
                                <label for="date">Choose your Date of birth:</label>
                                <input type="date" name="date" id="date" class="form-control" placeholder="DOB" required />
                            </div>
                            <div class="form-input mb-3">
                                <textarea name="address" id="address" class="form-control" placeholder="Enter your address" required></textarea>
                            </div>
                            <div class="form-input mb-3">
                                <input type="file" name="f" id="f" class="form-control">
                            </div>
                            <div class="form-input mb-3">
                                <select class="form-control" id="city" name="city">
                                    <option value="">--Select your city--</option>
                                    @foreach ($citys as $city)
                                        <option value="{{ $city->city_id }}">{{ $city->city_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-input mb-3">
                                <select class="form-control" id="area" name="area">
                                     <option value="">--Select your area--</option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->area_id }}">{{ $area->area_name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-input mb-3">
                                <select class="form-control" id="role" name="role">
                                    <option value="">--Select your role--</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="submit-button text-center">
                                <button type="submit" class="btn btn-style" name="submit" id="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //register-form -->
    <!-- footer-66 -->
    @include('user.comman.footer')
    <!--//footer-66 -->
</body>
</html>

<script src="user/assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll when navbar is active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll when navbar is active -->
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
