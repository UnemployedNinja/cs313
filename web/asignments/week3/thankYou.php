<?php

echo "Thank you for your Purchase <br><br>";
echo 'Your order will be sent to: ' .  $_POST['address'] . '<br>';

echo "Redirecting page...";
header("Refresh: 3; url=browse.php");

?>

