<!DOCTYPE html>
<html>
<body>

<?php

$totalCost; 

foreach(htmlspecialchars($_POST['season']) as $value) {
    echo array_sum($_POST['season']);
        //$total += $value;
}

echo "Your total cost is $total <br><br>"; 

?>

<form action="thankYou.php" method="POST">

    Would you like to Purchase? <br><br>
    <input type="submit" value="Purchase">

</form> 
</body>
</html>