<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Gobang Cemilan Bawang</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" /><span>
              Gobang Cemilan Bawang
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php"> Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"> Kontak</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Selamat Datang <br />
                            di Toko Kami
                          </h1>
                          <p>
                            Kami adalah toko cemilan yang menyediakan aneka
                            varian cemilan dengan cita rasa bawang yang khas
                            dan lezat. Dari keripik bawang hingga kacang bawang,
                            kami menyediakan produk - produk berkualitas tinggi,
                            yang akan memenuhi kebutuhan cemilan Anda.
                         
                          </p>
                          <div class="d-flex">
                            <a href="fruit.php" class="text-uppercase custom_orange-btn mr-3">
                              Beli
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>


  <!-- fruits section -->

  <section class="fruit_section">
    <div class="container">
      <h2 class="custom_heading">Produk Kami</h2>
      <p class="custom_heading-text">
              Goreng bawang merah yang terbuat dari 100% asli bawang merah 
               pilihan dengan rasa gurih, renyah, lezat dan diolah secara 
               higenis cocok untuk dijadikan pendamping hidangan makan utama 
               atau dijadikan makan ringan. Ada banyak variasi ukuran dari produk gobang cemilan bawang.
      </p>
      <div class="row layout_padding2">
        <div class="col-md-8">

        <?php
        $id_produk = 1; // Id_produk yang ingin Anda tampilkan
        include "produk.php";
        ?>
          
          <div class="fruit_detail-box">
            <h3><?php echo $namaProduk; ?></h3>
            <p class="mt-4 mb-5">
             <?php echo $produkDeskripsi; ?>
            </p>
            <div>
              <a href="<?php echo $produkLink; ?>" class="custom_dark-btn">
                Beli
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="<?php echo $produkgambar; ?>" alt="" class="" width="250px" />
          </div> 
        </div>
      </div>
      <div class="row layout_padding2">
        <div class="col-md-8">

        <?php
        $id_produk = 2; // Id_produk yang ingin Anda tampilkan
        include "produk.php";
        ?>
          
          <div class="fruit_detail-box">
            <h3><?php echo $namaProduk; ?></h3>
            <p class="mt-4 mb-5">
             <?php echo $produkDeskripsi; ?>
            </p>
            <div>
              <a href="<?php echo $produkLink; ?>" class="custom_dark-btn">
                Beli
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="<?php echo $produkgambar; ?>" alt="" class="" width="250px" />
          </div> 
        </div>
      </div>
      <div class="row layout_padding2-top layout_padding-bottom">
        <div class="col-md-8">

        <?php
        $id_produk = 3; // Id_produk yang ingin Anda tampilkan
        include "produk.php";
        ?>
          
          <div class="fruit_detail-box">
            <h3><?php echo $namaProduk; ?></h3>
            <p class="mt-4 mb-5">
             <?php echo $produkDeskripsi; ?>
            </p>
            <div>
              <a href="<?php echo $produkLink; ?>" class="custom_dark-btn">
                Beli
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="<?php echo $produkgambar; ?>" alt="" class="" width="250px" />
          </div> 
        </div>
      </div>
    </div>
  </section>

  <!-- end fruits section -->

  <!-- tasty section -->
  <section class="tasty_section">
    <div class="container_fluid">
      <h2>
        Gobang Cemilan Bawang
      </h2>
    </div>
  </section>

  <!-- end tasty section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <h2 class="custom_heading">Testimoni</h2>
      <p class="custom_heading-text">
        Ulasan dari pembeli produk gobang cemilan bawang kami.
</p>
      <div>
        <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                  <img src="images/client.png" alt="" />
                </div>
                <div class="client_detail">
                  <h3>
                    Johnhex
                  </h3>
                  <p class="custom_heading-text">
                    "Rasanya enak. gak bikin enek. gurihnya pas. recomended banget deh pokonya".
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Misi Kami
          </h5>
          <ul>
            <li>
              untuk menyediakan
            </li>
            <li>
              bawang goreng
            </li>
            <li>
              yang lezat, renyah,
            </li>
            <li>
              dan gurih.
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Quick Links
          </h5>
          <ul>
            <li>
            <a href="index.php" style="color:black">Home</a>
            </li>
            <li>
            <a href="fruit.php"  style="color:black">Produk</a>
            </li>
            <li>
            <a href="contact.php"  style="color:black">Kontak</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="social_container">
            <h5>
              Follow Us
            </h5>
            <div class="social-box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>

              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Gobang Bawang Goreng</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>