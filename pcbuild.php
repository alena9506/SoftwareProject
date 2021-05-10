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
if (isset($_SESSION["username"])) {
  // only if user is logged in perform this check
  if ((time() - $_SESSION['last_login_timestamp']) > 900) {
    header("location:logout.php");
    exit;
  } else {
    $_SESSION['last_login_timestamp'] = time();
  }
}
     
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <title>PC Builder - Puild PC Page</title>
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

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">PC Builder</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="securityinfo.php">How To Secure Your PC</a></li>
          <li><a href="#about">Main</a></li>
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
          <div id ="searchterms" class="section-title">
            <h2>Search The game that you want to play</h2>
            <input id ="mySearchField" class="form-control" type="text" placeholder="Type the name of the game here please" list="json-datalist">
            <div class="autocom-box" id="autocom-box">
          <!-- here list are inserted from javascript -->
            </div>
            <datalist id="json-datalist"></datalist>
          </div>           
          <button id ="mySearchButton" type="button" class="btn btn-secondary btn-lg btn-block">Search</button>    
        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="results" class="why-us">
      <div class="row">
        <div class="col-lg-12">
          <div class="thumbnail">
            <div class="container" id = "myContentArea">
            
            </div>
          </div>
        </div>
       </div>
      </div>
    </section><!-- End Why Us Section -->
   <script>

       $(document).ready(function() {
      
        var _myContentArea = document.getElementById("myContentArea");
        var _mySearchButton = document.getElementById("mySearchButton");
        _mySearchButton.onclick = getData;
        function getData(){
        var _mySearchField = document.getElementById("mySearchField");
            $.ajax({
               url: "https://api.rawg.io/api/games?key=1b5b11d2f0f64327b3cb730b0f4fdc35&search="+ _mySearchField.value,     
            method: "GET",
            dataType: "json",
            success: function(data) {
           var data = JSON.parse(data);   
       
                var str = "";
          
              for(var i= 0; i < data.results.length; i++){
                //console.log(data.results[i].platforms[i].platform.name);
                
                 str +='<h2>Name :<h2>'+data.results[i].name;
                 str += '<td><tr><p><img class="img-thumbnail" alt="Responsive Image" width="307" height="240" src="' + data.results[i].background_image+'"/></p></tr></td>';
                 
                $('<p class="platformslist">Platforms:  </p>').append(data.results[i].platforms[i].platform.name);
               
               
         }
               //str +='<h2>Platforms List :<h2>'+data.results[i].platforms[i].platform.name;   
               
      
              _myContentArea.innerHTML = str;
            }
            });
        }

    });
    </script>

         


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