<!DOCTYPE html>
<!--
Template Name: Yeinydd
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="en">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Palomino Coffee Company</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/coffee images/5da5227dab3d764aeb962396733088e3.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../pages/index.html">The Palomino Coffee Co</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../pages/home.html">Home</a></li>
          <li><a href="../pages/about.html">About</a></li>
          <li><a href="../pages/contact.html">Contact</a></li>
          <li><a href="../pages/shop.html">Shop</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->      
    <!-- ################################################################################################ -->


<?php

//require_once("navigation.php");

//Catch the info from the create form
//Render the data to the screen as a test
//Connect to the DB (manually at first)
//Insert user data into the DB

$name = htmlspecialchars($_POST['name']);          //grab the value that the user has entered in the name field
$phone = htmlspecialchars($_POST['phone']);          //grab the value that the user has entered in the phone field
$email = htmlspecialchars($_POST['email']);          //grab the value that the user has entered in the email field
$date = htmlspecialchars($_POST['date']);          //grab the value that the user has entered in the date field
$location = htmlspecialchars($_POST['location']);
$function = htmlspecialchars($_POST['function']);

//echo "DEBUG - The Name = " . $name . "<br />";       //will render out data on the screen
//echo "DEBUG - The Phone number = " . $phone . "<br />";       //will render out data on the screen
//echo "DEBUG - The Email = " . $email . "<br />";       //will render out data on the screen
//echo "DEBUG - The Date = " . $date . "<br />";       //will render out data on the screen
//echo "DEBUG - The Location = " . $location . "<br />";       //will render out data on the screen
//echo "DEBUG - The Function = " . $function . "<br />";       //will render out data on the screen


//Database
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "db_palomino_coffee";


//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


//Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO events(name, phone, email, date, location, function) VALUES ('$name', '$phone', '$email', '$date', '$location', '$function')";


if(mysqli_query($conn, $sql)) {
    //echo "New record created successfully!";
}
    else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }


//Close DB connection

$conn->close();
?>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>