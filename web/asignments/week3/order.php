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

    if(isset($_POST['season1'])) {
        $_SESSION['season'] = "https://www.google.com/search?biw=798&bih=751&tbm=isch&sxsrf=ACYBGNRBasQULg_qaIg7oV5M5EaT8alklw%3A1579638985576&sa=1&ei=yWAnXp_oIs2stQaoo67ABA&q=tmnt+logo&oq=tmnt+logo&gs_l=img.3..0l10.4885.5801..6022...0.0..0.309.787.5j1j0j1......0....1..gws-wiz-img.......35i39j0i67j0i131i67.OlDNdiIT3LA&ved=0ahUKEwjf8O7kxZXnAhVNVs0KHaiRC0gQ4dUDCAc&uact=5#imgrc=EIx0inYsyPTb3M:";
    }

    if(!empty($_POST['season'])) {
        // echo "Your items are: <br>";

        foreach($_POST['season'] as $value) {
            echo "Your items are: <br>";
            $_SESSION['pictures'] = $_POST['season'];
            echo $_SESSION['pictures'];
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