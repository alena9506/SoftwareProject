<?php
session_start();
unset($_SESSION);
session_destroy();
header("location:index.php");

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


?>