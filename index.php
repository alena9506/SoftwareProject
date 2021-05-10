<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PC Builder - Home Page</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <!-- =======================================================
  * Template Name: Day - v2.1.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onmousedown="return false" onselectstart="return false">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">PC Builder</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">Main</a></li>
          <li><a href="#services">Laptop Shop List</a></li>
          <li><a href="#portfolio">PC Shop List</a></li>
          <li><a href="accountpage.php">Account Page</a></li>
          <li><a href="accountpage.php"><i class="fas fa-user-circle"></i>Profile</a></li>
				  <li ><a href="index.php?logout='1'"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to PC Builder</h1>
      <h2>We are to help you to choose the Right PC/Laptop for your self</h2>
      <a href="#about" class="btn-get-started scrollto">Lets Begin</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-8 pt-6 pt-lg-0 order-2 order-lg-3 content" data-aos="fade-mid">
            <h3>Please tell us for what purposes will you be using the PC.</h3>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>01</span>
              <h4>Buy Laptop For Business</h4>
               <a href="#services" class="btn-build scrollto">Lets Begin</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box" >
              <span>02</span>
              <h4>Build PC for Games</h4>        
               <a href="pcbuild.php" class="btn-build scrollto">Lets Begin</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>3</span>
              <h4>Buy Gaming PC</h4>
               <a href="#portfolio" class="btn-build scrollto">Lets Begin</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Laptop Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <span>Buy Laptop For Business</span>
          <h2>Buy Laptop For Busines</h2>
           <h2>Second Hand</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box" style = "font-size: 50px;">
              <img src="assets/img/unnamed.jpg" class="img-fluid" alt="">
              <h4><a href="">Ebay</a></h4>
              <a href="https://www.ebay.com/b/Casual-Computing-Laptops-Netbooks/175672/bn_96616874?rt=nc&LH_ItemCondition=1000" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <img src="assets/img/amazon.png" class="img-fluid" alt="">
              <h4><a href="">Amazon</a></h4>
              <a href="https://www.amazon.co.uk/s?i=computers&bbn=429886031&rh=n%3A429886031%2Cp_n_condition-type%3A12319067031%2Cp_n_feature_fifteen_browse-bin%3A8322526031%7C8322527031%7C8322530031%7C8322532031&dc&qid=1615936512&rnid=8322509031&ref=sr_nr_p_n_feature_fifteen_browse-bin_6" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <img src="assets/img/creativeit.png" class="img-fluid" alt="">
              <h4><a href="">Creative IT</a></h4>
              <a href="https://creative-it.ie/product-category/laptops-2/laptops/?filter_l_processor=intel-core-i5%2Cintel-core-i5-3rd-gen&query_type_l_processor=or" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>
        </div>
           <div class="section-title">
                <h2>Brand New</h2>
            </div>
        <div class="row">  
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <img src="assets/img/currylogo.png" class="img-fluid" alt="">
              <h4><a href="">Currys PC World </a></h4>
              <a href="https://www.currys.ie/ieen/computing/laptops/laptops/315_3226_30328_xx_ba00012871-bv00311064/xx_xx_xx_xx_5-6-8-9-10-11-12-13-14-15-16-17-18-19-20-criteria.html" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box" style = "font-size: 50px;">
              <img src="assets/img/argos.png" class="img-fluid" alt="">
              <h4><a href="">Argos</a></h4>
              <a href="https://www.argos.ie/static/Browse/ID72/50000564/c_1/1%7Ccategory_root%7COffice%2C+PCs+and+phones%7C14418968/c_2/2%7Ccat_14418968%7CLaptops%7C50000564.htm" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <img src="assets/img/harveynorman.jpg" class="img-fluid" alt="">
              <h4><a href="">Harvey Norman Ireland</a></h4>
              <a href="https://www.harveynorman.ie/computing/laptops/?subcats=Y&features_hash=V16407." class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End of Laptop Section -->

  <!-- ======= PC Section ======= -->
    <section id="portfolio" class="services">
      <div class="container">

        <div class="section-title">
          <span>Buy Gaming PC</span>
          <h2>Buy Gaming PC</h2>
          <p>Please Choose from Which source you would like to buy the laptop</p>
           <h2>Second Hand</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <img src="assets/img/unnamed.jpg" class="img-fluid" alt="">
              <h4><a href="">Ebay</a></h4>
              <a href="https://www.ebay.com/b/Alienware-PC-Desktops-All-In-One-Computers/179/bn_646871?LH_ItemCondition=3000&rt=nc&_sop=15" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <img src="assets/img/amazon.png" class="img-fluid" alt="">
              <h4><a href="">Amazon</a></h4>
              <a href="https://www.amazon.co.uk/s?i=specialty-aps&bbn=21617907031&rh=n%3A21617907031%2Cp_n_condition-type%3A12319068031&dc&qid=1620049096&ref=sr_ex_p_n_feature_browse-b_0" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <img src="assets/img/creativeit.png" class="img-fluid" alt="">
              <h4><a href="">Creative IT</a></h4>
              <a href="https://creative-it.ie/product-category/pcs/desktop-pc/?filter_l_processor=intel-core-i5&query_type_l_processor=or&filter_l_ram=8gb&query_type_l_ram=or" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>
        </div>
           <div class="section-title">
                <h2>Brand New</h2>
            </div>
        <div class="row">  
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <img src="assets/img/currylogo.png" class="img-fluid" alt="">
              <h4><a href="">Currys PC World </a></h4>
              <a href="https://www.currys.ie/ieen/gaming/pc-gaming/gaming-pcs/694_4747_32502_xx_xx/xx-criteria.html" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <img src="assets/img/argos.png" class="img-fluid" alt="">
              <h4><a href="">Argos</a></h4>
              <a href="https://www.argos.ie/webapp/wcs/stores/servlet/Search?storeId=10152&catalogId=15051&langId=111&searchTerms=GAMING+PC&authToken=410340871%252CsJJ9XvmyDH0Pap39SUDxsd%252FLRP0%253D" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <img src="assets/img/harveynorman.jpg" class="img-fluid" alt="">
              <h4><a href="">Harvey Norman Ireland</a></h4>
              <a href="https://www.harveynorman.ie/gaming/pc-gaming/gaming-laptop-and-pc/?utm_source=website&utm_medium=cta&utm_campaign=gaming_hub_landing_page&utm_content=gaming_laptop_pc_shop_now" class="btn-build scrollto">Take me to the shop</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End of PC Section -->
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
     
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Day</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>