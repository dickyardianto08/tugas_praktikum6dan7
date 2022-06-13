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
