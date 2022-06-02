<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>BUS TRAVELINDO</title>
    <style>
         body{
            height: auto;
            background-image: url(assets/bg.webp);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
  </head>
  <body>
    <!-- AWAL NAVBAR -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">TRAVELINDO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#carouselExampleCaptions">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#bus">Bus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#price">Price</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<!-- AKHIR NAVBAR -->

<!-- AWAL IMAGE SLIDER -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/slider1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BUS TRAVELINDO</h5>
        <p>Kami memberikan pelayanan perjalanan yang nyaman untuk anda.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/slider2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BUS TRAVELINDO</h5>
        <p>Mengutamakan keselamatan penumpang agar selamat sampai tujuan.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/slider3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>BUS TRAVELINDO</h5>
        <p>Teman mudik anda yang terbaik.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<!-- AKHIR IMAGE SLIDER -->

<!-- JENIS BUS -->
<div class="container mt-5">
    <div id="bus">
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <p align=center>
                                <img src="assets/ekonomi.jpg" width="100%">
                            </p>
                        </div>
                        <div class="col">
                            <p align=center>
                                <img src="assets/ekonomiinterior2.jpg" width="100%">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">BUS EKONOMI</h5>
                    <p class="card-text">Kelas ekonomi merupakan yang paling rendah dan memiliki fasilitas paling sedikit. Biasanya belum menggunakan AC dan konfigurasi duduknya dua kursi di kiri dan tiga di kanan (2-3) untuk bus besar. Tarifnya juga paling murah.</p>
                    <a href="pesan.php" class="btn btn-success">PESAN</a>
                    <a href="#price" class="btn btn-primary">HARGA</a>
                </div>
            </div>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <p align=center>
                                <img src="assets/bisnis.jpg" width="100%">
                            </p>
                        </div>
                        <div class="col">
                            <p align=center>
                                <img src="assets/bisnisinterior.jpeg" width="100%">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">BUS BISNIS</h5>
                    <p class="card-text">Kelas VIP atau bisnis memberikan Fitur yang kurang lebih sama dengan bus ekonomi, pembedanya yaitu jarak antar kursi yang lebih lebar dan diberikan sandaran kaki (foot rest).</p>
                    <a href="pesan.php" class="btn btn-success">PESAN</a>
                    <a href="#price" class="btn btn-primary">HARGA</a>
                </div>
            </div>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <p align=center>
                                <img src="assets/eksekutif.jpg" width="100%">
                            </p>
                        </div>
                        <div class="col">
                            <p align=center>
                                <img src="assets/eksekutifinterior.jpg" width="100%">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">BUS EKSEKUTIF</h5>
                    <p class="card-text">Perbedaan dari kelas di bawahnya yaitu bentuk kursi yang lebih lebar dan nyaman, serta ada fasilitas leg rest dan foot rest yang bisa jadi tumpuan kaki selama perjalanan. Beberapa PO menyematkan sistem hiburan berupa Audio Video On Demand (AVOD) pada setiap bangkunya. Layanan tambahan pada kelas eksekutif selain servis makan gratis yaitu diberikannya snack saat di tengah perjalanan. Kelas yang lebih nyaman lagi dari eksekutif yaitu super eksekutif. Perbedaan dengan eksekutif yaitu konfigurasi kursi satu di kiri dan dua di kanan (1-2).</p>
                    <a href="pesan.php" class="btn btn-success">PESAN</a>
                    <a href="#price" class="btn btn-primary">HARGA</a>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR JENIS BUS -->

    <!-- TABEL HARGA -->
    <div id="price">
        <div class="shadow-lg p-5 mb-5 bg-white rounded">
            <h3 align=center >DAFTAR HARGA</h3>
            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">HARGA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ekonomi</td>
                        <td>Rp. 35.000</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Bisnis</td>
                        <td>Rp. 105.000</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Eksekutif</td>
                        <td>Rp. 250.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<!-- AKHIR TABEL HARGA -->
</div>

<!-- FOOTER -->
<div id="contact">
    <div class="footer shadow-lg p-5 bg-white rounded">
        <h3 align=center>CONTACT US</h3>
        <div class="row row-cols-2">
            <div class="col-lg-8">
                <h5>ALAMAT</h5>
                Jl. Pasar Gelap No.1010 Rt.01 Rw.01, Ilir Utara II, Semenanjung, Sumatera Tengah 300310 <br> <br>
                <h5>KONTAK</h5>
                Whatsapp  : (+62) 8516299201 <br>
                Instagram : @travelindobus <br><br>
                <h5>JAM OPERASIONAL KANTOR PUSAT</h5>
                Senin  : 09:00 - 19:00 <br>
                Selasa : 09:00 - 19:00 <br>
                Rabu   : 09:00 - 19:00 <br>
                Kamis  : 09:00 - 19:00 <br>
                Jumat  : 09:00 - 19:00 <br>
                Sabtu  : 09:00 - 19:00 <br>
                Minggu : 09:00 - 19:00 <br>
            </div>
        <div class="col-lg-4"><div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Hotel%20Santika%20Radial%20Palembang&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:400px;}</style><a href="https://www.embedgooglemap.net">how to add google map to my website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style></div></div></div>
    </div>
</div>
<!-- AKHIR FOOTER -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>