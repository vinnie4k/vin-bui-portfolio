<?php
$workSelected = "";
$blogSelected = "";
$aboutSelected = "";
$contactSelected = "nav-selected";
$footerFade = "fadeIn3";
$contactName = $_POST['name'];
$contactEmail = $_POST['email'];
$contactMsg = $_POST['message'];
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
  <title>Message Received</title>
  <link rel="icon" href="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/logo-white.png">
</head>

<body>
  <!-- header -->
  <?php include('includes/header.php') ?>

  <main>
    <div id="white-bg"></div>
    <div class="confirm_msg fadeIn1">
      <div class="confirm_msg_wrapper">
        <div class="confirm_msg_front">
          <!-- Source: (original work) Vin Bui -->
          <img src="https://storage.googleapis.com/portfolio-377906.appspot.com/public/images/confirmation_outline.jpg" alt="">
          <h1>Did not receive message.</h1>
          <h2>Currently a work in progress.</h2>
          <!-- <h1>Message received!</h1> -->
          <!-- <h2>Thanks for reaching out <?php echo htmlspecialchars($contactName); ?>!</h2> -->
          <div class="confirm-buttons">
            <a href="/" id="explore-btn"><span>🧭</span>Explore my work</a>
            <button class="view-msg-btn"><span>✉️</span>View message</button>
          </div>
        </div>
        <div class="confirm_msg_back">
          <div class="scroll-box">
            <h2>Sent from <?php echo htmlspecialchars($contactEmail); ?></h2>
            <div id="confirm-line"></div>
            <p class="confirm_msg_thin"><?php echo htmlspecialchars($contactMsg); ?></p>
          </div>
          <div id="view-msg-wrapper">
            <button class="view-msg-btn" id="flip-over-btn"><span>↪️</span>Flip over</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- footer -->
  <?php include('includes/footer.php') ?>
</body>

</html>
