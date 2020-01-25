<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="ShopHome.css">
        <title>Order Confirmation</title>
    </head>
    
    <body>
        
        <ul>
            <li><a href="ShopHome.html">Home</a></li>
            <li><a class="active" href="browse.html">Browse</a></li>
        </ul>
        <br><br>
        <h1>Order Confirmation</h1>
        <br><br>

<?php

    if(!empty($_POST['season'])) {
        // echo "Your items are: <br>";

        foreach($_POST['season'] as $value) {
            echo "Your items are: ";
            echo $value;
            "<br>";
            $totalCost += $value;
        }
    } else {
        header("url=browse.php");
    }

    echo "Your total cost is $totalCost <br><br>";

?>

<form action="thankYou.php" method="POST">
    To Purchase, please give us your shipping address and click submit: <br>
    <input type="text" name="address"><br><br>
    <input type="submit" value="Purchase">

</form> 
</body>
</html>