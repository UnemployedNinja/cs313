<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="ShopHome.css">
        <title>Confirm Order</title>
    </head>
    
    <body>
        
        <ul>
            <li><a href="ShopHome.html">Home</a></li>
            <li><a class="active" href="browse.html">Browse</a></li>
        </ul>
        <br><br>
        <h1>Confirm Order</h1>
        <br><br>

<?php

    if(!empty($_POST['season'])) {
        foreach($_POST['season'] as $value) {
            $totalCost += $value;
        }
    } else {
        header("url=browse.html");
    }

    echo "Your total cost is $totalCost <br><br>"; 
//}

?>

<form action="thankYou.php" method="POST">

    Would you like to Purchase? <br><br>
    <input type="submit" value="Purchase">

</form> 
</body>
</html>