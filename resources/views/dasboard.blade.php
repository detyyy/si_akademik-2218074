<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Akademik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href=" {{ asset('style/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('style/assets/img/apple-touch-icon.png')}} "rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('style/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link href="{{asset ('font/css/all.min.css')}}" reb="stylesheet">
  
  

  <!-- Template Main CSS File -->
  <link href="{{ asset ('style/assets/css/style.css')}}" rel="stylesheet">

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
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('style/assets/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">Akademik Bebasis Web</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

        

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-menu-button-wide"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- li class="nav-item"> -->
        <a class="nav-link " href="index.html">
          <i class="bi bi-person"></i>
          <span>Admin</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- li class="nav-item"> -->
        <a class="nav-link " href="index.html">
          <i class="bi bi-circle"></i>
          <span>Pengguna</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-shiled-halved"></i><span>Guru</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Nama</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="fa-solid fa-circe"></i><span>NIP</span>
            </a>
          </li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Alamat</span>
            </a>
          </li>
          <li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Mapel yang Diajarkan</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-shiled-halved"></i><span>Murid</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Nama</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="fa-solid fa-circe"></i><span>Kelas</span>
            </a>
          </li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Alamat</span>
            </a>
          </li>
          <li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Jenis Kelamin</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-shiled-halved"></i><span>Mapel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Nama Mapel</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="fa-solid fa-circe"></i><span>Jadwal Mapel</span>
            </a>
          </li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Jam Mulai</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-shiled-halved"></i><span>Jadwal Pelajaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Hari</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="fa-solid fa-circe"></i><span>Nama Mapel</span>
            </a>
          </li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Tahun Ajaran</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-shiled-halved"></i><span>Rapot</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Nilai</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="fa-solid fa-circe"></i><span>Mapel</span>
            </a>
          </li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Jenis Nilai</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-shiled-halved"></i><span>Nilai</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Nilai Tugas</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="fa-solid fa-circe"></i><span>Nilai UTS</span>
            </a>
          </li>
          <a href="tables-general.html">
              <i class="fa-solid fa-circe"></i><span>Nilai UAS</span>
            </a>
          </li>
          <li>
        </ul>
      </li><!-- End Tables Nav -->

      

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <h2>Selamat Datang</h2>

           

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset ('style/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset ('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset ('style/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset ('style/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset ('style/assets/vendor/quill/quill.js')}}"></script>
  <script src="{{asset ('style/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset ('style/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset ('style/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset ('assets/js/main.js')}}"></script>

</body>

</html>