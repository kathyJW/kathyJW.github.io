<html>
<body>
<?php

// clear cart
if($_POST["action"] == "clearcart")
{
  echo "Cart cleared";
  setcookie ("cart", $cart, time()-120);
}


if (!isset($_COOKIE["username"]))
{
  // user is not logged in
  echo "You need to login to see your cart!";
}
elseif (!isset($_COOKIE["cart"]) && isset($_COOKIE["username"]))
{
  // no items in cart
  echo "You have no items in your cart";
}

// add next item to cart if logged in and cart created
else
{
  //
$cart =  json_decode($_COOKIE["cart"], true);
$num = count($cart);

// print the cart status
echo "<br>Current items in cart: $num<br>";

foreach($cart as $value)
{
  echo "\n".$value."\n";
}

$script = $_SERVER['PHP_SELF'];

// end of script
echo "END";
echo "<br><a href=\"flights.php\">Flights</a>";
}

print <<<OK
<form action="$script" method="post">
<input type="hidden" value="clearcart" name="action">
<input type="submit" value="clear cart">
</form>
<a href="homepage.php" >Return to Home</a>
OK;
?>
</body>
</html>