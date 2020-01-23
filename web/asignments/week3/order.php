<!DOCTYPE html>
<html>
<body>

<?php

$totalCost; 

foreach($_POST['season'] as $value) {
    $total += $value;
}

echo "Your total cost is $total <br><br>"; 

?>

<form action="thankYou.php" method="POST">

    Would you like to Purchase? <br><br>
    <input type="submit" value="Purchase">

</form> 
</body>
</html>