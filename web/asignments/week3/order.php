<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="order.css">
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

        $totalCost = 0;

        foreach($_POST['season'] as $value) {

            if($value == 1) {
                echo '<img src="season1.jpg" width="188" height="268">';
                $cost = "6.98";
                echo "Price: $cost";
                echo '<input type="submit" class="button" name=remove" value="Remove" />';
                echo "<br><hr>";
                $totalCost += $cost;
                if(isset($_Post['remove'])) {
                    unset($_POST['season']);
                    $totalCost -=$cost;
                    header("Refresh:0");
                }


            }
            if($value == 2) {
                echo '<img src="season2.jpg" width="188" height="268">';
                $cost = "6.39";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 3) {
                echo '<img src="season3.jpg" width="188" height="268">';
                $cost = "9.15";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 4) {
                echo '<img src="season4.jpg" width="188" height="268">';
                $cost = "6.35";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 5) {
                echo '<img src="season5.jpg" width="188" height="268">';
                $cost = "8.96";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 6) {
                echo '<img src="season6.jpg" width="188" height="268">';
                $cost = "10.04";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 7) {
                echo '<img src="season7.jpg" width="188" height="268">';
                $cost = "13.89";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 8) {
                echo '<img src="season8.jpg" width="188" height="268">';
                $cost = "6.88";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 9) {
                echo '<img src="season9.jpg" width="188" height="268">';
                $cost = "6.39";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 10) {
                echo '<img src="season10.jpg" width="188" height="268">';
                $cost = "7.49";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
        }
    } else {
        header("url=browse.php");
    }

    echo "Your total cost is $totalCost <br><br>";

    function removeItem() {
        unset($_POST['season']);
    }
?>

<form action="thankYou.php" method="POST">
    To Purchase, please give us your shipping address and click submit: <br>
    <textarea rows="4" cols="50" name="address" placeholder="Enter Address Here..."></textarea><br><br>
    <input type="submit" value="submit">

</form> 
</body>
</html>