<?php
$workSelected = "";
$blogSelected = "nav-selected";
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
  <title>Blog | Vin Bui</title>
  <link rel="icon" href="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/logo-white.png">
</head>

<body>
  <!-- header -->
  <?php include('includes/header.php') ?>

  <main>
    <!-- page heading -->
    <div class="page-heading">
      <div class="first-heading fadeIn1">
        <h1>Welcome to my blog.</h1>
        <i class="fa-solid fa-pencil"></i>
        <span class="heading-line"></span>
      </div>
      <h2 class="fadeIn2">My stories and ideas wrapped in one place.</h2>
    </div>

    <!-- main content -->
    <div class="blog-content fadeIn3">
      <p>Coming soon!</p>
    </div>
  </main>

  <!-- footer -->
  <?php include('includes/footer.php') ?>
</body>

</html>
