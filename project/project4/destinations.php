<?php
if(!isset($_COOKIE["username"])){
  $username="Login";
    $_COOKIE['reference']="login.html";
}
else{
  $username=$_COOKIE["username"];
  $_COOKIE['reference']="profile.php";
}
$reference=$_COOKIE["reference"];




print <<<MAIN
<!DOCTYPE html>

<html lang="en">

<head>
	<title>GamersWhoFly</title>
 	<meta charset="UTF-8">
   <link href="homepage.css" rel="stylesheet">
      <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="homepage.js"></script>


</head>

<!--Navigation Bar-->
<div class = 'top' id = 'toparea'>  <a href="homepage.php">
    <img  id="logo" src = 'proj.img' alt = 'picture'></a><div class= 'rightlink'>
    <a href="homepage.php" class="active">Home</a>
      <a href="flights.php">Flights</a>
      <a href="destinations.php">Destinations</a>
      <a href="contact.php">Contact Us</a>

      <a href=$reference>$username</a>
      </div></div>

<h1>Destinations</h1>

<div class="destinationheader">
  See where you can fly to.
</div>
<br>
<div class="destinationbody">
<iframe width="840" height="473" src="https://www.youtube.com/embed/OHAWwaYu2H0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
</div>

<br>
<div class="destinationheader">
  Mouse over and click the images to explore the world.
</div>

<a href="japan.php">
<div class="destimg">
  <img class = "img1"   src = "Japan.jpg" alt="Japan"/>

  <div class="centered2"><div class="header2">Japan</div>
  <br><br>
  <div class="text3">
  Visit the Torii shrine.
 </div>
 </div>
</div></a>


<a href="france.php">
<div class="destimg">
  <img class = "img1"   src = "France.jpg" alt="France"/>

  <div class="centered2"><div class="header2">France</div>
  <br><br>
  <div class="text3">
  Take in the beautiful lights.
 </div>
 </div>
</div></a>


<a href="germany.php">
<div class="destimg">
  <img class = "img1"   src = "Germany.jpg" alt="Germany"/>

  <div class="centered2"><div class="header2">Germany</div>
  <br><br>
  <div class="text3">
  Travel through a quaint village.
 </div>
 </div>
</div></a>


<a href="china.php">
<div class="destimg">
  <img class = "img1"   src = "China.jpg" alt="China"/>

  <div class="centered2"><div class="header2">China</div>
  <br><br>
  <div class="text3">
  Climb the Great Wall.
 </div>
 </div>
</div></a>

<a href="tanzania.php">
<div class="destimg">
  <img class = "img1"   src = "Tanzania.jpg" alt="Tanzania"/>

  <div class="centered2"><div class="header2">Tanzania</div>
  <br><br>
  <div class="text3">
  Greet the giraffes.
 </div>
 </div>
</div></a>

<a href="brazil.php">
<div class="destimg">
  <img class = "img1"   src = "Brazil.jpg" alt="Brazil"/>

  <div class="centered2"><div class="header2">Brazil</div>
  <br><br>
  <div class="text3">
    Swim the vibrant waters.
 </div>
 </div>
</div></a>



<hr>
<div id="footer"><br>
&#169;2020 Gamers Who Like to Fly. Images were obtained with free use from unsplash.com. <br>
11/11/2020 Kathy Wang, Michael Gurch, Jason Hoover.
</div>

</html>



MAIN;

?>