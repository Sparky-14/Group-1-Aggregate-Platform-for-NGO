<?php
session_start();
include 'conn.php';

if(isset($_POST["wid"])){
  $wid = $_POST["wid"];
  $id = $_POST["id"];
  $sql = "INSERT INTO `NGOsProblemRequest`(`NID`, `PID`) VALUES ($id, $wid)";
  if ($conn->query($sql) === TRUE) {
    header("location:service.php");
  }
}

if($_SESSION["user"]){
  $pid = $_GET['pid'];
  $id = $_SESSION["id"];
  $sql = "SELECT * FROM Problems WHERE pid = '$pid'";
  $row = $conn->query($sql);
  echo '
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>eNGO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    
      <h1 class="logo"><a href="index.html">eNGO</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="service.php">Services</a></li>
          <li><a class="nav-link scrollto " href="portfolio.php">Portfolio</a></li> 
          <li><a class="nav-link scrollto " href="logout.php">Sign Out</a></li>  
</ul>
          

    </div>
  </header><!-- End Header -->
  
  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <span>Problems</span>
          <h2>Problems</h2>
          <p>NGOs worldwide perform a wide range of services aimed towards human wellbeing and social welfare.</p>
        </div>
        
        <div class="row">';
            $result = $row->fetch_assoc();
          echo '
          <div class="col-sm-10" style="margin: auto;">
            <div class="icon-box text-center" style="height: 100%;padding:30px 20px;">
              <div class="row">
                  <h2 style="margin: auto;">'.$result['Title'].'</h2>
                </div>
                <div class="mt-2 d-flex">
                    <div class="justify-content-start d-flex"><i class="bx bx-map"></i> '.$result['Location'].'
                    </div>
                </div>
                <div class="row mt-2">
                    <p>'.$result['Problem'].'</p>
                </div>
                <div class="row justify-content-center mt-2">
                  <form method="post">
                    <input type="hidden" name="wid" value="'.$pid.'">
                    <input type="hidden" name="id" value="'.$id.'">
                    <button type="submit" class="col-4 btn-get-started">Request to work</button>
                    </form>
                    </div>
                    </div>
                </div>';
                echo '
              </div>
              
      </div>
    </section>
    <!-- End Services Section -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>NGO</h3>
            <p>Enter your Email</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>eNGO</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        Designed by <a>Team 1</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>';
$conn->close();
}else{
  header("location:login.php");
}
?>