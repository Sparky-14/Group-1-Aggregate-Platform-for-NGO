<?php
include 'conn.php';

$sql = "SELECT * FROM `NGOs`";
if(isset($_POST['name'])){
  global $sql;
  $name = $_POST['name'];
  $sector = $_POST['sector'];
  $address = $_POST['address'];
  $name = stripcslashes($name);
  $sector = stripcslashes($sector);
  $address = stripcslashes($address);
  $sql .= " WHERE 1 ";
  if($name && !empty($name)){
    $sql .= "AND Name LIKE '%$name%' ";
  }if($sector && !empty($sector)){
    $sql .= "AND Sector LIKE '%$sector%' ";
  }
  if($address && !empty($address)){
    $sql .= "AND Address LIKE '%$address%'";
  }
}
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

      <h1 class="logo"><a href="index.php">eNGO</a></h1>
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="service.php">Services</a></li>
          <li><a class="nav-link scrollto " href="portfolio.php">Portfolio</a></li>
          <li><a class="nav-link scrollto " href="login.php">Login</a></li>
          <li><a class="nav-link scrollto " href="admin.php">Admin</a></li>
          
        </ul>
    </div>
  </header><!-- End Header -->
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Elegant and creative solutions for your Problems</h1>
          <h2>Together, lets help each other.</h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Donate</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  
  <main id="main">
    <div class="container text-center p-2">
    <form method="POST">
      <div class="row">
        <div class="col-sm-3">
          <label for="name"> NGO name</label>
          <input type="text" name="name" class="form-control" id="name" value="'.$name.'">
        </div>
        <div class="col-sm-3">
          <label for="name">Sector</label>
          <input type="text" class="form-control" name="sector" id="sector" value="'.$sector.'">
        </div>
        <div class="col-sm-3">
          <label for="name">Address</label>
          <input type="text" name="address" class="form-control" id="location" value="'.$address.'">
        </div>

        <div class="col-sm-3 text-center" style="margin-top:1.2rem;">
          <button type="submit" class="btn-get-started">Submit</button>
        </div>
        </div>
        </form>
    </div>
    <br>
    
    <div  class="container">
      <h2>NGOs</h2>
      <div class="table-responsive">
       <table class = "table">
         <thead>
           
          <tr>
            <th>ID</th>
            <th>NGO Name</th>
            <th>Sector</th>
            <th>State</th>
            <th>District</th>
            <th>Website</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>';
        $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "
              <tr>
              <td>".$row["ID"]."</td>
              <td>".$row["Name"]."</td>
              <td>".$row["Sector"]."</td>
              <td> ".$row["State"]."</td>
              <td> ".$row["District"]."</td>
              <td> ".$row["Website"]."</td>
              <td>".$row["Address"]."</td>
              </tr>";
            }
          }else{
            echo "There are no records";
          }
          echo '
        </tbody>

       </table>
      </div>
    </div>

     <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Call for further details</h3>
          <p> Click here</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

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
?>