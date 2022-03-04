<html>
<body>
<?php

//cart activated
echo "cart\nsdfsdf";


//*******************************


// first item added to cart (User needs to be logged in)
if (!isset($_COOKIE["cart"]) && isset($_COOKIE["username"]))
{
  // begin the cart cookie
  echo "Cart created";
  $items = array();
  
  // add the first item to the cart
  array_push($items, $_POST["book1"]); 

  // create cart cookie
  setcookie ("cart", json_encode($items), time()+120);
  echo "<br>added item to cart<br>";
}

// add next item to cart if logged in and cart created
elseif(isset($_COOKIE["cart"]))
{
  // decode 
  $cart = $_COOKIE['cart'];
  $cart = stripslashes($cart);
  $cart = json_decode($cart, true);

  // add items
  if($_POST["book1"] == 1)
  {
    echo "hi";
    array_push($cart, $_POST["book1"]); 
  }

  // add new 

  // encode back to json
  $cart = json_encode($cart, true);
  // $_COOKIE["cart"] = $cart;
  setcookie ("cart", $cart, time()+120);
  echo "<br>added item to cart<br>";
  echo "<br><a href=\"mycart.php\">My Cart</a><br>";
  // $cart = $_COOKIE['cart'];
  // $cart = stripslashes($cart);
  // $cart = json_decode($cart, true);
  // $num = count($cart);
  // echo "<br>Total items in cart: ".$num;
}


//
// $cart =  json_decode($_COOKIE["cart"], true);
// $num = count($cart);

// // print the cart status
// echo "<br>Current items in cart: $num<br>";

// foreach($cart as $value)
// {
//   echo "\n".$value."\n";
// }

// end of script
echo "END";
echo "<br><a href=\"flights.php\">Flights</a>";

?>
</body>
</html>