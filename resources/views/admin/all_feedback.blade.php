<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>All Feedback</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/assets/img/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
      <h1>All Feedback</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Home</a></li>
          <li class="breadcrumb-item">All Feedback</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">

              <!-- Table with hoverable rows -->
              <table class="table table-hover"><br>
               <thead><center>
                  <tr>
                    <th scope="col">Feedback ID</th>
                    <th scope="col">User name</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Message</th>
                  </tr></center>
                </thead>
                <tbody>
                  @foreach ($feedbacks as $feedback)
                  <tr>
                    <th scope="row">{{$feedback->f_id}}</th>
                    <td>{{$feedback->name}}</td>
                    <td>{{$feedback->rating}}</td>
                    <td>{{$feedback->message}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <nav aria-label="Page navigation" style="float:right;">
    <ul class="pagination">
      @if ($feedbacks->onFirstPage())
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      @else
      <li class="page-item">
        <a class="page-link" href="{{ $feedbacks->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
      </li>
      @endif

      @foreach ($feedbacks->links()->elements[0] as $page => $url)
      @if ($page == $feedbacks->currentPage())
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">{{ $page }}</a>
      </li>
      @else
      <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
      @endif
      @endforeach

      @if ($feedbacks->hasMorePages())
      <li class="page-item">
        <a class="page-link" href="{{ $feedbacks->nextPageUrl() }}">Next</a>
      </li>
      @else
      <li class="page-item disabled">
        <a class="page-link" href="#">Next</a>
      </li>
      @endif
    </ul>
  </nav>
                </ul>
              </nav>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<br><br><br><br><br><br><br><br>
  <!-- ======= Footer ======= -->
  @include('admin.comman.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="admin/assets/vendor/quill/quill.js"></script>
  <script src="admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/assets/js/main.js"></script>

</body>

</html>