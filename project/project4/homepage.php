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

<!--Search Middle-->
<br>
<div id="homeform">
    <form id="homeformsearch">
      <h3>Search for Flights</h3>
      <div id="homebuttext">
        <div id="fieldinput">
        <div>
        <label for="depart">Depart At:</label>
            <br>
        <select name="depart" id="depart">
            <option value="LA">Los Angeles, California</option>
            <option value="NYC">New York, New York</option>
            <option value="HOU">Houston, Texas</option>
        </select>
        </div>
        <div>
        <label for="arrive">Arrive At:</label>
        <br>
        <select name="arrive" id="arrive">
            <option value="LA">Los Angeles, California</option>
            <option value="NYC">New York, New York</option>
            <option value="HOU">Houston, Texas</option>
        </select>
        </div>
     <div>
      <label for="departtime">Departure Date:</label>
        <br>
      <input type="datetime-local" id="departtime" name="departtime">
     </div>
     <div>
      <label for="returntime">Return Date:</label>
        <br>
      <input type="datetime-local" id="returntime" name="returntime">
    </div>
      </div><br>

      <div id="homeradio">
      <input type="radio" id="round" name="triptype" value="round">
      <label for="round">Round-trip</label>
      <input type="radio" id="oneway" name="triptype" value="oneway">
      <label for="oneway">One-way</label>
      </div>
        <br>
        <div id="homebuttonsearch">
      <button type="submit" form="homeformsearch" value="Submit">Search</button>
        </div>
      </div>
    </form>
    </div>

<br>
<br>
<!--Bottom -->
<hr>
<a href="search.php"><div class= "desc">
    <img class = "img1"  src = "mountain.jpg" alt="mountain"/>
    <div class="centered"><div class="header">Discover the world</div>
    <br><br>
    <div class="text1">
    Fast and easy booking system for your next flight.<br>
    Search any location you want and plan your next journey.
</div>
</div></div></a>

<a href="flights.php"><div class= "desc2">
    <img class = "img1"  src = "plane.jpg" alt="plane"/>
     <div class="centered2"><div class="header2">Flights</div>
     <br><br>
     <div class="text2">
     Look up flights available.
    </div>
    </div></div></a>
     
    <a href="destinations.php"><div class= "desc2">
        <img class = "img1"   src = "flowers.jpg" alt="flowers"/>
         <div class="centered2"><div class="header2">Destinations</div>
         <br><br>
         <div class="text2">
         Preview locations you can explore.
        </div>
        </div></div></a>


<hr>
<div id="footer"><br>
&#169;2020 Gamers Who Like to Fly. Images were obtained with free use from unsplash.com. <br>
11/30/2020 Kathy Wang, Michael Gurch, Jason Hoover.
</div>

</html>

MAIN;

?>