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
        <h1>Confirm Order</h1>
        <br>
        <br>

<?php

// if(!isset($_POST['submit'])) {
//     header("url=browse.html");
// } else {


    foreach(htmlspecialchars($_POST['season[]']) as $value) {
        $totalCost += $value;
        print_r($value);
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