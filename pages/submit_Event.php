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
<title>Contact Palomino Coffee Company</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/5da5227dab3d764aeb962396733088e3.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.html"><img class="imgr borderedbox inspace-5" src="../images/palominologo.png" alt=""></a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_center">
        <ul class="clear">
          <li><a href="../index.html">Home</a></li>
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
    <br><br><br><br><br><br> 
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
$servername = "palominocoffee-mysqldbserver.mysql.database.azure.com";
$username = "db_palomino_coffee'@'20.40.202.14";
$password = "ZdFz08h34UFCQQ4B";
$dbname = "db_palomino_coffee";


//Initializes MySQLi
$conn = mysqli_init();


// Establish the connection
mysqli_real_connect($conn, $servername, $dbname, $username, $password);


//Check connection
if($conn->connect_error) {
    die//("Connection failed: " . $conn->connect_error);
      echo 
        <h2>Ooops!</h2>
          <p>It looks like we are experiencing technical issues.</p><br>
          <p>Please contact us at palominocoffee@gmail.com</p>
}


$sql = "INSERT INTO events (name, phone, email, date, location, function) VALUES ('$name', '$phone', '$email', '$date', '$location', '$function')";


//If connection failed, show the error
if (mysqli_connect_errno()) {
  echo 
     <div id="comments">
     <h2>Thanks!</h2>
        <p>Our booking coordinator will reach out to you soon.</p><br>
        <p>If you have any questions please contact us at<br>palominocoffee@gmail.com</p>
}
    else {
      echo 
        <h2>Ooops!</h2>
          <p>It looks like we are experiencing technical issues.</p><br>
          <p>Please contact us at palominocoffee@gmail.com</p>
          //"Error: " . $sql . "" . mysqli_error($conn);
    }
    
    //die('Failed to connect to MySQL: '.mysqli_connect_error());
}


//Close DB connection

$conn->close();
?>


      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div id="ctdetails" class="clear">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> 1(405)789-5643</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> palominocoffee@gmail.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="https://www.google.com/maps">our location</a></span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; - All Rights Reserved - <a href="../pages/terms.html">Terms and Conditions</a></p>
    <!-- <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>  -->
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
