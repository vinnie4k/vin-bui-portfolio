<?php
$workSelected = "";
$blogSelected = "";
$aboutSelected = "nav-selected";
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
  <title>About | Vin Bui</title>
  <link rel="icon" href="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/logo-white.png">
</head>

<body>
  <!-- header -->
  <?php include('includes/header.php') ?>

  <main>
    <!-- page heading -->
    <div class="page-heading">
      <div class="first-heading fadeIn1">
        <h1>About me.</h1>
        <i class="fa-solid fa-child-reaching"></i>
        <span class="heading-line"></span>
      </div>
      <h2 class="fadeIn2">Who am I? What makes me, me? This is my story.</h2>
    </div>

    <!-- bouncing arrow -->
    <div class="bounce-wrapper">
      <a class="fa-solid fa-angles-down bounce" href="#about-top">‎</a>
    </div>

    <!-- about content -->
    <div id="about-top" class="about-content fademe">
      <!-- Source: (original work) Vin Bui -->
      <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/me.jpg" alt="" class="about-img">
      <div class="about-paragraph">
        <p>
          I'm a second-year student at <a class="link-color" id="cornell" href="https://www.cornell.edu/">Cornell
            University</a> intending to major in <a class="link-color" href="https://infosci.cornell.edu/undergraduate/info-sci-majors/bs-information-science-systems-and-technology">Information
            Science, Systems, and Technology</a> in the College of Engineering with a primary concentration in
          interactive
          technologies and secondary concentration in user experience. My main focus is to develop skills as a
          <span class="bold">full stack developer</span> by engaging in challenging projects, both personal and with a
          passionate team.
        </p>
        <p>
          My journey began in high school where I took three years of computer science and two years of networking and
          cybersecurity. Those memorable years helped me discover the true purpose of writing programs: <span class="bold">to solve real world problems</span>. Fast-forward to today, I have developed several projects
          with strong mission statements, all aimed to provide a simple and effective solution to real problems.
        </p>
        <p>
          Aside from school and programming, you can see me live streaming video games on <a class="link-color" id="twitch" href="https://twitch.tv/vinniefourkay">Twitch</a>, working out at the gym, and playing
          basketball
          🏀 or tennis 🎾 at the courts!
        </p>
        <div id="resume-wrapper">
          <a href="https://storage.googleapis.com/portfolio-377906.appspot.com/public/resume.pdf" id="resume-btn">Resume ↗</a>
        </div>
      </div>
    </div>

  </main>

  <!-- footer -->
  <?php include('includes/footer.php') ?>
</body>

</html>
