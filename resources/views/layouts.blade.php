{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Modul 6 & 7 PAW</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="{{URL::to('/')}}">Simple Siakad</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>

                    <li><a class="nav-link scrollto active" href="#hero">Data Mahasiswa</a></li>
                    <li><a class="nav-link scrollto active" href="{{ url('table/create') }}">Input Mahasiswa</a></li>
                    <li><a class="nav-link scrollto active" href="#about">About Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="">
                @yield('content')
            </div>
        </div>
    </section><!-- End Hero -->
    <br/>
    <br/>

    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center ">
                <div class="col-lg-3 text-lg-left">
                    <div class="copyright">
                       <strong>Jurusan Teknik Informatika</strong><br>
                       <strong>Universitas Trunojoyo Madura</strong>
                       <p>Jl. Raya Telang, Kecamatan Kamal, Bangkalan<br>
                        69162 Indonesia<br>
                        Kampus Universitas Trunojoyo Madura</p>
                    </div>
                    <div class="credits">
                    </div>
                </div>
                <div class="col-lg-3 text-lg-left">
                    <div class="copyright">
                        <strong>Contact</strong><br>
                        <p>Telp : 031-3011146 <br>
                        Fax : 031-3011506 <br>
                        Email : if.ft@trunojoyo.ac.id</p>
                    </div>
                    <div class="credits">
                    </div>
                </div>
                <div class="col-lg-3 text-lg-left">
                    <div class="copyright">
                        <strong>Layanan</strong><br>
                        <p>Pembayaran UKT <br>
                        Pendaftaran KP <br>
                        Pendaftaran Wisuda <br>
                        Administrasi</p>
                    </div>
                    <div class="credits">
                    </div>
                </div>
                <div class="col-lg-3 text-lg-left">
                    <div class="copyright">
                        <strong>Resource</strong><br>
                        <p>e-Journal <br>
                        Portal Tugas Akhir <br>
                        Website Resmi Kampus <br>
                        Download Administrasi</p>
                    </div>
                    <div class="credits">
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->
</body>

</html> --}}


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modul 6 & 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container">
          <a class="navbar-brand" href="#">SIAKAD SEDERHANA</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('table')}}">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('table/create')}}">Input Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('aboutme') }}">About Me</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <!-- Akhir Nav -->
    <br><br>
    @yield('content')
    <!-- Footer -->
    <footer class="footer-dark bg-primary text-center text-lg-start" style="position:absolute; width:100%; bottom:0;" >
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <ul class="list-unstyled mb-0">
                <li>
                    <p class="text-light">Jurusan Teknik Informatika <br>
                    Universitas Trunojoyo Madura <br>
                    Jl. Raya Telang, Kecamatan Kamal, Bangkalan <br>
                    69162 Indonesia <br>
                    Kampus Universitas Trunojoyo Madura</p>
                </li>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <ul class="list-unstyled mb-0">
                  <li>
                      <p class="text-light">Contact <br>
                      telp : 031-3011146 <br>
                      Fax : 031-3011506 <br>
                      email : if.ft@trunojoyo.ac.id <br>
                      Kampus Universitas Trunojoyo Madura</p>
                  </li>
              </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <ul class="list-unstyled mb-0">
                  <li>
                      <p class="text-light">Layanan <br>
                      Pembayaran UKT <br>
                      Pendaftaran KP <br>
                      Pendaftaran Wisuda <br>
                      Administrasi</p>
                  </li>
              </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <ul class="list-unstyled mb-0">
                  <li>
                      <p class="text-light">Resourse <br>
                      e-Journal <br>
                      Portal Tugas Akhir <br>
                      Website REsmi Kampus <br>
                      Doenload ADministrasi</p>
                  </li>
              </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
