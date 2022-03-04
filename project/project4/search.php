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
<html>

<head>
	<title>GamersWhoFly</title>
 	<meta charset="UTF-8">
   <link href="homepage.css" rel="stylesheet">
      <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>

<body>    

<!--Navigation Bar-->
<div class = 'top' id = 'toparea'>  <a href="homepage.php">
    <img  id="logo" src = 'proj.img' alt = 'picture'></a><div class= 'rightlink'>
    <a href="homepage.php" class="active">Home</a>
      <a href="flights.php">Flights</a>
      <a href="destinations.php">Destinations</a>
      <a href="contact.php">Contact Us</a>

      <a href=$reference>$username</a>
      </div></div>

<!-- FORM -->
<div id="formsection">
<div id="formtitle">

<h1>Flights</h1>
</div>
<div id="searchform">
<!-- the form -->
<div id="homeform">
    <form id="homeformsearch">
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
      </div>
      <div id="searchformbottom">
        <table>
            <tr>
                <td>
                <div>
        <label for="depart">Sort By:</label>
        <select name="depart" id="depart">
            <option value="early">Earliest flight times</option>
            <option value="NYC">Cheapest flights</option>
        </select>
        </div>
                </td>
                <td>
      <div id="flightsearchradio">
      <input type="radio" id="round" name="triptype" value="round">
      <label for="round">Round-trip</label>
      <input type="radio" id="oneway" name="triptype" value="oneway">
      <label for="oneway">One-way</label>
      </div>
                </td>
                <td>
        <div id="homebuttonsearch">
      <button type="submit" form="homeformsearch" value="Submit">Submit</button>
        </div>
         </td>
            </tr>
         </table>
        </div>
      </div>
    </form>
    </div>

<!-- the form -->
</div>
</div>
<hr>
<!-- Flight results table -->
<div id="flighttable">
<table border="border">
<tr>
<th>
<p>Austin, TX to Los Angeles, CA</p>
</th>
</tr>
<tr class="rowinfo">
<td class="row">
    <div>
    Plane pic
    </div>
    <div>
    Departure 
    </div>
    <div>
    Arrival
    </div>
    <div>
    Travel Time
    </div>
    <div>
    <button>Book now!</button>
    </div>
</td>
</tr>
</table>
</div>
    
<hr>
<div id="footer"><br>
&#169;2020 Gamers Who Like to Fly. Images were obtained with free use from unsplash.com. <br>
11/30/2020 Kathy Wang, Michael Gurch, Jason Hoover.
</div>
</body>  
</html>

MAIN;

?>