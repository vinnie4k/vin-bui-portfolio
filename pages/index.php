<?php
$workSelected = "nav-selected";
$travelSelected = "";
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
  <title>Work | Vin Bui</title>
  <link rel="icon" href="/public/images/logo-white.png">
</head>

<body>
  <!-- header -->
  <?php include('includes/header.php') ?>

  <main>
    <!-- home introduction -->
    <div class="page-heading">
      <div class="first-heading fadeIn1">
        <h1 class="thin-text">Hi. I'm Vin.</h1>
        <h2 class="fadeIn2" id="home-about">A student and <span class="bold">developer</span> looking into full-stack
          development with a serious passion for improving user experience and developing new technologies.</h2>
      </div>
    </div>

    <!-- bouncing arrow -->
    <div class="bounce-wrapper">
      <a class="fa-solid fa-angles-down bounce" href="#home-top">‎</a>
    </div>

    <!-- skills -->
    <div id="home-top" class="fadeIn3">
      <div class="skills fademe">
        <h2>SKILLS</h2>
        <div class="skills-list">
          <ul>
            <li>iOS Dev</li>
            <li>Web Dev</li>
            <li>Software Dev</li>
          </ul>
          <ul>
            <li>UI/UX</li>
            <li>Frontend</li>
            <li>Backend</li>
          </ul>
        </div>
      </div>

      <!-- work content -->
      <div class="page-content fademe">
        <!-- Source: (original work) Vin Bui -->
        <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/scribbly/logo.png" alt="" class="work-img">
        <div>
          <div class="work-head">
            <h2>Scribbly</h2>
            <div class="symbols">
              <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/symbols/uikit.png" alt="">
              <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/symbols/firebase.png" alt="">
            </div>
          </div>
          <p>An iOS social media app that strives to make improving one's art skills a social and playful experience.
          </p>
        </div>
      </div>

      <div class="page-content fademe">
        <!-- Source: (original work) Vin Bui -->
        <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/superset-logo.jpg" alt="" class="work-img">
        <div>
          <div class="work-head">
            <h2>SUPERSET</h2>
            <div class="symbols">
              <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/symbols/uikit.png" alt="">
            </div>
          </div>
          <p>Implemented an iOS app with UIKit for weightlifters to plan their workout split and keep track of their
            progress.</p>
        </div>
      </div>

      <div class="page-content fademe">
        <!-- Source: Turbine Designs -->
        <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/turbine-designs.png" alt="" class="work-img">
        <div>
          <div class="work-head">
            <h2>Turbine Designs</h2>
            <div class="symbols">
              <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/symbols/html-css-js-logos.png" alt="" id="html-css-js">
            </div>
          </div>
          <p>Collaborated with a small team of students to develop a website for Turbine Designs, a motorsport design
            service company in Ithaca, NY.</p>
        </div>
      </div>
    </div>
  </main>

  <!-- footer -->
  <?php include('includes/footer.php') ?>
</body>

</html>
