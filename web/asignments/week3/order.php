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
                echo '<img src="season1.jpg">';
                $cost = "6.98";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 2) {
                echo '<img src="season2.jpg">';
                $cost = "6.39";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 3) {
                echo '<img src="season3.jpg">';
                $cost = "9.15";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 4) {
                echo '<img src="season4.jpg">';
                $cost = "6.35";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 5) {
                echo '<img src="season5.jpg">';
                $cost = "8.96";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 6) {
                echo '<img src="season6.jpg">';
                $cost = "10.04";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
            if($value == 7) {
                echo '<img src="season7.jpg">';
                $cost = "13.89";
                echo "Price: $cost <br><hr>";
                $totalCost += $cost;
            }
        }
    } else {
        header("url=browse.php");
    }

    echo "Your total cost is $totalCost <br><br>";




    // if(!empty($_POST['season'])) {
    //     // echo "Your items are: <br>";

    //     foreach($_POST['season'] as $value) {
    //         echo "Your items are: ";
    //         echo $value;
    //         echo "<br>";
    //         $totalCost += $value;
    //     }
    // } else {
    //     header("url=browse.php");
    // }

    // echo "Your total cost is $totalCost <br><br>";

?>

<form action="thankYou.php" method="POST">
    To Purchase, please give us your shipping address and click submit: <br>
    <input type="text" name="address"><br><br>
    <input type="submit" value="Purchase">

</form> 
</body>
</html>