<?php


error_reporting(E_ALL);
ini_set("display_errors", "on");

$username = $_POST["username"];
$password = $_POST["password"];

 //connect to server

if($username=="" || $password==""){
echo "<script>alert('Username and password are required. $username,$password');
window.location.href='login.html'</script> ";
exit;
}


$server = "fall-2020.cs.utexas.edu";
$user = "cs329e_bulko_kathywan";
$pwd = "mild=rigid-Expand";
$dbName = "cs329e_bulko_kathywan";
$mysqli = new mysqli ($server,$user,$pwd,$dbName);

// Connect to MySQL Server

if ($mysqli->connect_errno) {
   die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
}   
$username = $mysqli->real_escape_string($username);
$password = $mysqli->real_escape_string($password);

//build query

$query ="SELECT * FROM passwords WHERE username= '$username'";

//Execute query
$result = $mysqli->query($query) or die($mysqli->error);

if (!$result) {
    die("Query failed: ($mysqli->error <br> SQL command
    = $command");
    }
    elseif($result->num_rows === 0){
      echo "<script>alert('Login failed.');
window.location.href='login.html'</script> ";
      }
      else{
  
          //do the checks on it
  
          $row = $result-> fetch_assoc();
          //if user and pass same
          if($row['username']==$username && $row['password']==$password){
              //head back to homepage and set the cookie for username
              //user can be logged in for an hour.
	     session_start();
              setcookie("username", $username,  time()+3600);
             header("Location: homepage.php");
              
          }
          elseif($row['username']==$username && $row['password']!=$password){
                
                  echo "<script>alert('Login failed.');
window.location.href='login.html'</script> ";
          }
  
  
      }





?>