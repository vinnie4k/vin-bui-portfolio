<?php
$workSelected = "";
$travelSelected = "nav-selected";
$aboutSelected = "";
$contactSelected = "";
$footerFade = "fademe-footer";
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="description" content="Vin Bui's Portfolio">
  <meta name="author" content="Vin Bui">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <!-- link and scripts -->
  <link rel="stylesheet" href="https://storage.googleapis.com/portfolio-377906.appspot.com/public/styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3e3c2e0820.js" crossorigin="anonymous"></script>
  <script src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/scripts/jquery-3.6.0.js"></script>
  <script src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/scripts/hamburger.js"></script>
  <script src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/scripts/fade-in.js"></script>
  <script src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/scripts/flip.js"></script>

  <!-- head content -->
  <title>Travel | Vin Bui</title>
  <link rel="icon" href="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/logo-white.png">
</head>

<body>
  <!-- header -->
  <?php include('includes/header.php') ?>

  <main>
    <!-- page heading -->
    <div class="page-heading">
      <div class="first-heading fadeIn1">
        <h1>My trip around the world.</h1>
        <i class="fa-solid fa-plane"></i>
        <span class="heading-line"></span>
      </div>
      <h2 class="fadeIn2">Lay back, grab some popcorn, and enjoy this journey.</h2>
    </div>

    <!-- bouncing arrow -->
    <div class="bounce-wrapper">
      <a class="fa-solid fa-angles-down bounce" href="#travel-top">‎</a>
    </div>

    <!-- travel content -->
    <div id="travel-top" class="travel-content fadeIn3">
      <!-- vietnam -->
      <div class="travel-container fademe">
        <h2>Vietnam</h2>
        <!-- Source: (original work) Vin Bui -->
        <div class="travel-images">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/hoi-an.jpg" alt="">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/ha-tien.jpg" alt="">
        </div>
      </div>
      <!-- ithaca -->
      <div class="travel-container fademe">
        <h2><span>Ithaca, </span><span>New York</span></h2>
        <!-- Source: (original work) Vin Bui -->
        <div class="travel-images">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/ithaca1.jpeg" alt="">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/ithaca2.jpeg" alt="">
        </div>
      </div>
      <!-- nyc -->
      <div class="travel-container fademe">
        <h2><span>NYC, </span><span>New York</span></h2>
        <!-- Source: (original work) Vin Bui -->
        <div class="travel-images">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/nyc1.jpeg" alt="">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/nyc2.jpeg" alt="">
        </div>
      </div>
      <!-- nola -->
      <div class="travel-container fademe">
        <h2><span>New Orleans, </span><span>Louisiana</span></h2>
        <!-- Source: (original work) Vin Bui -->
        <div class="travel-images">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/nola1.jpg" alt="">
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/travel/nola2.jpeg" alt="">
        </div>
      </div>
    </div>

  </main>

  <!-- footer -->
  <?php include('includes/footer.php') ?>
</body>

</html>
