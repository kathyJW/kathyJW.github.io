<?php

setcookie("username", '', 1);
session_destroy();
echo "<script type='text/javascript'>
alert('Thank you');
location='homepage.php';
</script>";



?>