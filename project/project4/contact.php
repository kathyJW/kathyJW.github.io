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
   <link href="Contactus.css" rel="stylesheet">
   <script src = 'Contactus.js'></script>
      <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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

      <h1> About Us</h1>
      <hr id = 'hrline'>
      <h2 class = 'names'>Michael Gurch</h2>
      <div class = 'row_contact'>
      <div class = 'column'><img src="mike.jpg" alt="mike" width="410" height="273"></div>
      <div class = 'column'> Senior MIS and Japanese student</div>
        
      </div>

      <hr id = 'hrline'>
  
      <h2 class = 'names'>Kathy Wang</h2>
      <div class = 'row_contact'>
        <div class = 'column'><img src="kathy.jpg" alt="kathy" width="280" height="350"></div>
        <div class = 'column'> Senior Biology BSA student</div>
          
        </div>
      <hr id = 'hrline'>
        <h2 class = 'names'> Jason Hoover</h2>
        <div class = 'row_contact'>
          <div class = 'column'><img src="jason.jpg" alt="jason" width="280" height="373"></div>
          <div class = 'column'>Junior Geography student </div>
            
        </div>
	<hr class = 'hrline'>
	
      <div class = 'row_contact'>
        <div class = 'column'> <h2>Contact Us</h2>
        <p>123123 Airport Way</p>
        <p>gamerswhofly@gmail.com</p>
        <p>555-555-555</p>
        </div>
	<div class = 'column'>
	<div id = 'content'>
        <p>Leave any questions, comments, or complaints.</p>
	<p>We would love to hear from you!</p>
	
        <form method = "POST">
        <p>Name: <input type="text" class ='put' id="uname"  ></p> 
        <p>E-mail: <input type="text" class = 'put' id="uemail" ></p> 
        <p>Comments and Questions: </p>
        <textarea id="tarea">
          Leave comments here:
        </textarea>
        <br>
        <input class = 'inside' type = 'button' id = 'button1' onclick = 'emailcheck()' value="Submit"></button>
	<button class = 'inside' type="reset" value="Reset">Reset</button>
	<br>
	<br>
	</div>
        





	</form>
        </div>
         </div>
<hr>
<div id="footer"><br>
&#169;2020 Gamers Who Like to Fly. Images were obtained with free use from unsplash.com. <br>
11/11/2020 Kathy Wang, Michael Gurch, Jason Hoover.
</div>  
      



</html>


MAIN;

?>
