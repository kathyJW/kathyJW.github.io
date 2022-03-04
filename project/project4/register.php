<?php

   error_reporting(E_ALL);
   ini_set("display_errors", "on");
   
   $username = $_POST["username"];
   $password = $_POST["password"];
  $repeat = $_POST["repeat"];

	if($repeat!=$password){
	echo "<script>alert('Passwords did not match.');
window.location.href='register.html'</script> ";

	exit;
}


    //connect to server


   $server = "fall-2020.cs.utexas.edu";
   $user = "cs329e_bulko_kathywan";
   $pwd = "mild=rigid-Expand";
   $dbName = "cs329e_bulko_kathywan";
   $mysqli = new mysqli ($server,$user,$pwd,$dbName);
   
   // Connect to MySQL Server

   if ($mysqli->connect_errno) {
      die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
   }   
 
   //build query

   $query ="SELECT * FROM passwords WHERE username= '$username'";

   //Execute query
   $result = $mysqli->query($query) or die($mysqli->error);


   //Make output for AJAX and run queries on username
   if (!$result) {
    die("Query failed: ($mysqli->error <br> SQL command
    = $command");
    }
    elseif($result->num_rows === 0){
       
      //QUERY TO ADD   
       $command= "INSERT INTO passwords VALUES
        ('$username', '$password')";
         $result = $mysqli->query($command);
         if ($result == FALSE) {
            die("Query failed: ($mysqli->error <br> SQL command
            = $command");
            }
    
        else{
            echo "<script>alert('New user registered! Now please login.');
		window.location.href='login.html'</script> ";
        }

    }
    else{

        //do the checks on it

        $row = $result-> fetch_assoc();
        //if user same
        
        if($row['username']==$username){
            echo "<script>alert('Username is taken.');
window.location.href='register.html'</script> ";
              }


    }




?>