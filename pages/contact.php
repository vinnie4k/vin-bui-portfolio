<?php
$workSelected = "";
$blogSelected = "";
$aboutSelected = "";
$contactSelected = "nav-selected";
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
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

  <!-- head content -->
  <title>Contact | Vin Bui</title>
  <link rel="icon" href="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/logo-white.png">
</head>

<body>
  <!-- header -->
  <?php include('includes/header.php') ?>

  <main>
    <!-- page heading -->
    <div class="page-heading">
      <div class="first-heading fadeIn1">
        <h1>Reach out to me!</h1>
        <i class="fa-solid fa-paper-plane"></i>
        <span class="heading-line"></span>
      </div>
      <h2 class="fadeIn2">Got a question or just want to say hello? Go ahead!</h2>
    </div>

    <!-- bouncing arrow -->
    <div class="bounce-wrapper">
      <a class="fa-solid fa-angles-down bounce" href="#calendly">‎</a>
    </div>

    <!-- Calendly inline widget -->
    <div id="calendly" class="calendly-inline-widget fademe" data-url="https://calendly.com/vinbui/chat-w-vin"></div>

    <!-- form -->
    <!-- <div class="fadeIn3">
      <form id="contact-form" action="/contact/confirmation" method="post" novalidate>
        <div id="name-email">
          <div class="form-label">
            <label for="contact-name">Name</label>
            <input type="text" name="name" id="contact-name" />
          </div>
          <div class="form-label">
            <label for="contact-email">Email</label>
            <input type="email" name="email" id="contact-email" />
          </div>
        </div>

        <div class="form-label">
          <label for="contact-msg">Message</label>
          <textarea name="message" id="contact-msg"></textarea>
        </div>

        <div class="send-wrapper">
          <button id="send-msg" type="submit">
            <span>Send</span>
            <i class="material-icons">send</i>
          </button>
        </div>
      </form>
    </div> -->
  </main>

  <!-- footer -->
  <?php include('includes/footer.php') ?>
</body>

</html>
