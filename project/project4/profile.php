<?php

if(!isset($_COOKIE["username"])){
  $username="Login";
  setcookie("reference", "login.html");
}
else{
  $username=$_COOKIE["username"];
  setcookie("reference", "profile.php");
}

$reference=$_COOKIE["reference"];



$username=$_COOKIE["username"];

print <<<MAIN

<html>

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


<div class = 'top' id = 'toparea'>  <a href="homepage.php">
    <img  id="logo" src = 'proj.img' alt = 'picture'></a><div class= 'rightlink'>
    <a href="homepage.php" class="active">Home</a>
      <a href="flights.php">Flights</a>
      <a href="destinations.php">Destinations</a>
      <a href="contact.php">Contact Us</a>

      <a href=$reference>$username</a>
      </div></div>


<div class="destinationheader">
    User Profile
</div>
<br>

<div class="profile"><table>
<tr>
<td>
Username:</td> <td>$username</td></tr>
<tr>
<td>

Bookings:</td> <td>COMING SOON </td></tr>
</table></div>

<br>

<button onclick="location.href='logout.php'" type="button" >Logout</button>


</html>

MAIN;
?>

