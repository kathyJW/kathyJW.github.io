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

<h1>Germany</h1>

<div class="destinationheader">
  Experience the villages and beautiful architecture.
</div>
<br>
<div class="destinationbody">
<iframe width="840" height="473" src="https://www.youtube.com/embed/IPbzWJNmndY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br>
</div>

<br>
<div class="destinationheader">
  Related sites with more information.
</div>


<div class="destinationlinks">
<ul>
  <li><a href="https://www.germany.travel/en/home.html">https://www.germany.travel/en/home.html</a> - Guide to traveling in Germany.</li>
  <li><a href="https://www.ricksteves.com/europe/germany">https://www.ricksteves.com/europe/germany</a> - Information on the places in Germany.</li>
  <li><a href="https://wikitravel.org/en/Germany">https://wikitravel.org/en/Germany</a> - Wiki travel page on Germany.</li>
</ul>
</div>

<hr>
<div id="footer"><br>
&#169;2020 Gamers Who Like to Fly. Images were obtained with free use from unsplash.com. <br>
12/7/2020 Kathy Wang, Michael Gurch, Jason Hoover.
</div>

</html>


MAIN;

?>