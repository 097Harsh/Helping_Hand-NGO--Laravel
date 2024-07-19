<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Donation Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('admin/assets/img/favicon.png"')}} rel="icon">
  <link href="{{asset('admin/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('admin.comman.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.comman.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Donation Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="route('Dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">Donation</li>
          <li class="breadcrumb-item active">Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
       

        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                  <h5 class="card-title">Donation Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">{{$donation->name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Donation Tite</div>
                    <div class="col-lg-9 col-md-8">{{$donation->Title}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Donation Description</div>
                    <div class="col-lg-9 col-md-8">{{$donation->Description}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Donation Status</div>
                    <div class="col-lg-9 col-md-8">{{$donation->status}}</div>
                  </div>
                  

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact Name</div>
                    <div class="col-lg-9 col-md-8">{{$donation->contact_name}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Contact Person</div>
                    <div class="col-lg-9 col-md-8">{{$donation->contact_person}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Donation Date</div>
                    <div class="col-lg-9 col-md-8"> {{$donation->donation_date}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Donation City</div>
                    <div class="col-lg-9 col-md-8">{{$donation->city_name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Donation Area</div>
                    <div class="col-lg-9 col-md-8">{{$donation->area_name}}</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Donation Category</div>
                    <div class="col-lg-9 col-md-8">{{$donation->cat_name}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">{{$donation->address}}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Donation Timint</div>
                    <div class="col-lg-9 col-md-8">{{$donation->From_time}}    TO     {{$donation->To_Time}}</div>
                  </div>
              
                  

                </div>


              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin.comman.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/assets/js/main.js')}}"></script>

</body>

</html>