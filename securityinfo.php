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

<body onmousedown="return false" onselectstart="return false">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">PC Builder</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="securityinfo.php">How To Secure Your PC</a></li>
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
 <style>
        /* Initially, hide the extra text that
            can be revealed with the button */
        #moreText {
  
            /* Display nothing for the element */
            display: none;
        }
       #moreText2 {
  
            /* Display nothing for the element */
            display: none;
        }
    </style>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <h1>Things You Must Do When You Get a New PC</h1>
        <p class="noselect">Breaking out your new PC is one of the most exciting feelings in the world. You unwrap the plastic, plug in the charger, and power on to a faster, more seamless Windows experience. After you enjoy the thrill of the unboxing, it’s time to get your new setup configured. If you want to get the most out of your new PC, then be sure to follow these steps.</p>
       <span id="points">...</span>
        <span id="moreText">
        <h3> Set Up an Anti-Virus </h3>
        <p>
          There’s a bit of a misconception that PCs are virus-prone. Instead, there are just so many PCs in the world that hackers generally target them instead of wasting time on operating systems with a tiny percentage of the market share like Mac OS and Linux. Fortunately, there are many powerful tools out there you can use to protect yourself. Windows come built-in with a pretty solid firewall and antivirus setup.
          However, you should take it a step further and download anti-virus software. You can set it to run in the background during your normal usage, and it will not only scan for viruses but also malware and other nasty things trying to steal data or slow down your new CPU.
        </p>
        <p>https://uk.pcmag.com/antivirus/8141/the-best-antivirus-protection</p>
         <h3> Install a VPN </h3>
        <p>
          The vast majority of all computer hacks occur over the internet. For this reason, you must protect your internet connection. With a VPN, you encrypt and anonymize your connection with the latest in AES-256 technology — the highest industry standard. If you use it, no one can intercept your connections, even on public unprotected WiFi. And since your real IP is hidden, no advertisers or platforms like Facebook and Google can keep track of your browsing habits to sell your data to the highest bidder.
        </p>
        <p>https://thebestvpndeals.com/ie/best-vpn/?gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRi-0wtb5OgNG7693Jc6CvuPHLVy0s7W2V1-YJ5bLLZ6CsYfvj0SGlsaAo3aEALw_wcB</p>
        <h3> Setup a File Encryption Software </h3> 
        <p>
          Cloud computing has become an integral part of the PC experience. It touches all aspects of our computer use. Whether we are uploading photos to iCloud, sharing business documents on Google Drive, or sending files via Dropbox, it’s everywhere. Unfortunately, these services aren’t completely secure, as hackers have broken into users’ accounts on many occasions.
          With file encryption software like Nordlocker, you can not only protect the files on your computer but anything you upload to the Cloud. It’s easy to use as well. All you do is install and select which files to encrypt. You can utilize additional features like selecting who can view/edit the file and set temporary passcodes.
        </p>
        <p> https://uk.pcmag.com/encryption/83976/the-best-encryption-software-for-2020 </p>
        <h3> Use a Password Manager </h3> 
        <p>
          Password managers are revolutionizing the way we secure our online accounts. The average person uses over fifteen login credentials across various platforms and websites. Yet, most of us are guilty of using the same password (or a very similar one) across all of them. Password managers create unique, extremely strong passwords for each of your accounts. All you have to do is login into the password manager of your choice and it will login to all your other accounts from there.

What’s more, should a cyber-criminal try to gain access to one of your accounts, you’ll get a notification right away so you can shut it down immediately. Some password managers are even going a step further and using biometric security features like facial recognition and fingerprint IDs to create an even more secure experience.
        </p>
        <p>
          https://www.trusted-software.com/lp/top-10-passwort-manager-uk/?popup=y&source=gs&adw-cpn=password-c&c=2826&gclid=Cj0KCQjw4cOEBhDMARIsAA3XDRhPKObVDlaDCHrAKaRkrgM9yOzVuLhjxH_nUb6hF_akNoyE6BkTwPEaAnL0EALw_wcB
        </p>
         <h3> Get the Latest Updates</h3>      
        <p>
          Even if you are first in line at the Lenovo or Dell store for a new PC, chances are Windows will already have an update waiting for you. As frustrating as this is, these updates are for your own security. Hackers are constantly trying to exploit flaws in the Windows OS to gain access to people’s data. Microsoft is quick to find this and usually releases a security patch right away. But it also means that users need to be ready to install these updates.

While it’s not exactly fun to watch an update screen as soon as you unwrap your new PC, you’ll be happy to not have a cybersecurity breach in the future. The same goes for all your other apps as well. Make sure everything is always up to date. You can set Windows to run automatic updates in the background at times you don’t use your computer, like overnight or during lunch hour, so they never get in your way.
        </p>
          </span>
        </div>
    </section><!-- End About Section -->
<div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <a onclick="toggleText()" id="textButton" class="btn-get-started scrollto">
        Show More
    </a>
    </div>
    
    
    
    
     <section id="about" class="about">
      <div class="container"> 
       <h1>Things You Can Do to Be More Secure Online </h1>
        <P>Are you worried that the IRS might expose the personal data you submitted when filing taxes online, or that the DMV might spill all your personal information? That’s not paranoid; it’s rational. High-level breaches can and do happen, and there’s nothing you can do to prevent them. But other attacks on your security and privacy hit closer to home. When you sit down to work on your novel one day, you may find all the existing chapters encrypted by ransomware. You might also log into your online banking system and see a big fat zero balance, because a data-stealing Trojan captured your credentials. On the bright side, you can mount your own defense against these local problems.
            Making your devices, online identity, and activities more secure really doesn't take much effort. In fact, several of our tips about what you can do to be more secure online boil down to little more than common sense. These tips for being more secure in your online life will help keep you safer.
        </P>
         <span id="points2">...</span>
        <span id="moreText2">
        <h3> Explore the Security Tools You Install </h3>
        <P>
          To be totally sure your antivirus is configured and working correctly, you can turn to the security features check page on the website of the AMTSO (Anti-Malware Testing Standards Organization). If your antivirus doesn't pass, it's time to contact tech support and find out why.
          </P>
           <h3>Use Unique Passwords for Every Login </h3>
          <p>
            Creating a unique and strong password for every account is not a job for a human. That why you use a password manager. Several very good password managers are free, and it takes little time to start using one. For-pay password managers generally offer more features, however.
            When you use a password manager, the only password you need to remember is the master password that locks the password manager itself. When unlocked, the password manager logs you into your online accounts automatically. That not only helps keep you safer, but also increases your efficiency and productivity. You no longer spend time typing your logins or dealing with the time-consuming frustration of resetting a forgotten password.
          </p>
          <p> https://passwordsgenerator.net/</p>
          <h3>Use Two-Factor Authentication </h3>
          <p>
            Two-factor authentication can be a pain, but it absolutely makes your accounts more secure. Two-factor authentication means you need to pass another layer of authentication, not just a username and password, to get into your accounts. If the data or personal information in an account is sensitive or valuable, and the account offers two-factor authentication, you should enable it. Gmail, Evernote, and Dropbox are a few examples of online services that offer two-factor authentication.
            If you just use a password for authentication, anyone who learns that password owns your account. With two-factor authentication enabled, the password alone is useless. Most password managers support two-factor, though some only require it when they detect a connection from a new device. Enabling two-factor authentication for your password manager is a must.
          </p>
           <h3>Use Different Email Addresses for Different Kinds of Accounts </h3>
          <p>
            People who are both highly organized and methodical about their security often use different email addresses for different purposes, to keep the online identities associated with them separate. If a phishing email claiming to be from your bank comes to the account you use only for social media, you know it's fake.

Consider maintaining one email address dedicated to signing up for apps that you want to try, but which might have questionable security, or which might spam you with promotional messages. After you've vetted a service or app, sign up using one of your permanent email accounts. If the dedicated account starts to get spam, close it, and create a new one. This is a do-it-yourself version of the masked emails you get from Abine Blur and other disposable email account services.

Many sites equate your email address with your username, but some let you select your own username. Consider using a different username every time—hey, your password manager remembers it! Now anyone trying to get into your account must guess both the username and the password.
          </p>
           <h3> Clear Your Cache </h3>
          <p>
            Never underestimate how much your browser's cache knows about you. Saved cookies, saved searches, and Web history could point to home address, family information, and other personal data.
            To better protect that information that may be lurking in your Web history, be sure to delete browser cookies and clear your browser history on a regular basis. It's easy. In Chrome, Edge, Firefox, Internet Explorer, or Opera, simply press Ctrl+Shift+Del to bring up a dialog that lets you choose which elements of browser data you want to clear.
            Deleting cookies may cause trouble for some websites—you may lose any personalization you've applied. Most browsers let you list favorite websites whose cookies shouldn't be tossed.
            For a complete guide to getting started, you can read our feature on how to clear your cache in any browser.
          </p>
           <h3> Turn Off the 'Save Password' Feature in Browsers </h3>
          <p>
            Speaking of what your browser may know about you, most browsers include a built-in password management solution. We at PCMag don't recommend them, however. We feel it's best to leave password protection to the experts who make password managers.
            Think about this. When you install a third-party password manager, it typically offers to import your password from the browser's storage. If the password manager can do that, you can be sure some malicious software can do the same. In addition, keeping your passwords in a single, central password manager lets you use them across all browsers and devices.
          </p>
           <h3> Don't Fall Prey to Click Bait or Phishing Scams </h3>
          <p>
            Part of securing your online life is being smart about what you click. Click bait doesn't just refer to cat compilation videos and catchy headlines. It can also comprise links in email, messaging apps, and on Facebook. Phishing links masquerade as secure websites, hoping to trick you into giving them your credentials. Drive-by download pages can cause malware to automatically download and infect your device.
            Don't click links in emails or text messages, unless they come from a source you trust. Even then, be cautious; your trusted source might have been compromised, or the message might be a fake. The same goes for links on social media sites, even in posts that seem to be from your friends. If a post seems unlike the style of your social media buddy, it could be a hack
          </p>
           <h3> Protect Your Social Media Privacy </h3>
          <p>
            There’s a common saying: if you’re not paying for a service, you’re not a customer; you’re the product. Social media sites make it easy for you to share your thoughts and pictures with friends, but it’s easy to wind up sharing too much.

You can download your Facebook data to see just what the social media giant knows about you. It may be quite an eye-opener, especially if you're the kind of person who routinely clicks on quizzes that require access to your social media account. Really, you don't need to know which Disney princess or dog breed you are.

You can drastically reduce the amount of data going to Facebook by disabling the sharing platform entirely. Once you do, your friends can no longer leak your personal data. You can't lose data to apps, because you can't use apps. And you can't use your Facebook credentials to log into other websites (which was always a bad idea).

Of course, other social media sites need attention too. Google probably knows more about you than Facebook, so take steps to manage your Google privacy, too. Make sure you've configured each social media site so that your posts aren't public (well, all except Twitter). Think twice before revealing too much in a post, since your friends might share it with others. With care you can retain your privacy without losing the entertainment and connections of social media.
          </p>
        </span>
      </div>
     </section>
     <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <a onclick="toggleText2()" id="textButton2" class="btn-get-started scrollto">
        Show More
    </a>
       </div>
     <script>
        function toggleText() {
  
            // Get all the elements from the page
            var points = 
                document.getElementById("points");
  
            var showMoreText =
                document.getElementById("moreText");
  
            var buttonText =
                document.getElementById("textButton");
          
  
            // If the display property of the dots 
            // to be displayed is already set to 
            // 'none' (that is hidden) then this 
            // section of code triggers
            if (points.style.display === "none") {
  
                // Hide the text between the span
                // elements
                showMoreText.style.display = "none";
  
                // Show the dots after the text
                points.style.display = "inline";
  
                // Change the text on button to 
                // 'Show More'
                buttonText.innerHTML = "Show More";
            }
  
            // If the hidden portion is revealed,
            // we will change it back to be hidden
            else {
  
                // Show the text between the
                // span elements
                showMoreText.style.display = "inline";
  
                // Hide the dots after the text
                points.style.display = "none";
  
                // Change the text on button
                // to 'Show Less'
                buttonText.innerHTML = "Show Less";
            }
        }
    </script>
       <script>
        function toggleText2() {
  
            // Get all the elements from the page
            var points2 = 
                document.getElementById("points2");
  
            var showMoreText2 =
                document.getElementById("moreText2");
  
            var buttonText2 =
                document.getElementById("textButton2");
          
  
            // If the display property of the dots 
            // to be displayed is already set to 
            // 'none' (that is hidden) then this 
            // section of code triggers
            if (points2.style.display === "none") {
  
                // Hide the text between the span
                // elements
                showMoreText2.style.display = "none";
  
                // Show the dots after the text
                points2.style.display = "inline";
  
                // Change the text on button to 
                // 'Show More'
                buttonText2.innerHTML = "Show More";
            }
  
            // If the hidden portion is revealed,
            // we will change it back to be hidden
            else {
  
                // Show the text between the
                // span elements
                showMoreText2.style.display = "inline";
  
                // Hide the dots after the text
                points2.style.display = "none";
  
                // Change the text on button
                // to 'Show Less'
                buttonText2.innerHTML = "Show Less";
            }
        }
    </script>
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

       $(function() {
        var _myContentArea = document.getElementById("myContentArea");
        var _mySearchButton = document.getElementById("mySearchButton");
        _mySearchButton.onclick = getData;

        function getData(){
        var _mySearchField = document.getElementById("mySearchField");
            $.ajax({
               url: "https://api.rawg.io/api/games?search="+ _mySearchField.value,     
            method: "GET",
            dataType: "json",
            success: function(data) {
                var str = "";          
              for(var i= 0; i < data.results.length; i++){
                 str +='<h2>Name :<h2>'+data.results[i].name;
                     str += '<td><tr><p><img class="img-thumbnail" alt="Responsive Image" width="307" height="240" src="' + data.results[i].background_image+'"/></p></tr></td>';
               }
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