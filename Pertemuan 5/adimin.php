<?php
session_start();
// cek apakah ada username
if(!isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleHome.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>Aditt Apparel Store Indo</title>
  </head>
  <body>

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Navigasi/img4.webp" alt="" width="50" height="50" class="me-2">
                Adtyans <strong>Store</strong>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto my-4">
                <input class="form-control me-2" type="search" placeholder="Cari Barang Anda" aria-label="Search">
                <button class="btn btn-light" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Notifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Bantuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Masuk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->
    
      <!-- Awal Carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Navigasi/img1.jpg" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Navigasi/img2.webp" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Navigasi/img3.jpg" class="d-block w-100" alt="..." height="800">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Akhir Carousel -->

      <!-- AWal Dagangan -->
<div class="container" id="fasilitas">
    <div class="row">
        <div class="col text-center mb-3">
            <h3>Barang - Barang</h3>
        </div>
    </div>
  
    <div class="row">
        <!-- start gambar fasilitas 1 baris 1 -->
        <div class="col-md">
          <div class="card">
              <img src="Navigasi/img1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">T-Shirt</h5>
              </div>
            </div>
      </div>
      <!-- end gambar fasilitas 1 baris 1 -->
        <!-- start gambar fasilitas 2 baris 1 -->
        <div class="col-md">
            <div class="card">
                <img src="Navigasi/img2.webp" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hoodie</h5>
                </div>
              </div>
        </div>
        <!-- end gambar fasilitas 2 baris 1 -->
        <!-- start gambar fasilitas 3 baris 1 -->
        <div class="col-md">
            <div class="card">
                <img src="Navigasi/img3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Celana panjang</h5>
                </div>
              </div>
        </div>
        <!-- end gambar fasilitas 3 baris 1 -->
    </div>
    <!-- Akhir Dagangan-->
    <div class="row">
      <!-- start gambar fasilitas 1 baris 2 -->
      <div class="col-md">
        <div class="card">
            <img src="Navigasi/img5.jpg" class="card-img-top" alt="..." height="500">
            <div class="card-body">
                <h5 class="card-title">Sepatu</h5>
            </div>
          </div>
    </div>
      <!-- end gambar fasilitas 1 baris 2 -->
      <!-- start gambar fasilitas 2 baris 2 -->
      <div class="col-md">
        <div class="card">
            <img src="Navigasi/img6.jpg" class="card-img-top" alt="..." height="500">
            <div class="card-body">
                <h5 class="card-title">jaket</h5>
            </div>
          </div>
      <!-- end gambar fasilitas 2 baris 2 -->
    </div>


    </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>