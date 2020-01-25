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
        $totalCost = 0;
        $vector = new \Ds\Vector();


        foreach($_POST['season'] as $value) {
            if($value == 0) {
                $_SESSION['pictures'] = "https://www.google.com/search?biw=798&bih=751&tbm=isch&sxsrf=ACYBGNS7DMvY3yoggt7dH2TkTpLUqQyEvA%3A1579641632941&sa=1&ei=IGsnXsvmOJC1tAaPtLT4CA&q=tmnt+classic+cartoons+season+1&oq=tmnt+classic+cartoons+season+1&gs_l=img.3..35i39.217382.217382..217806...0.0..0.77.213.3......0....1..gws-wiz-img.yKIUL_Yyu7k&ved=0ahUKEwjL9pzTz5XnAhWQGs0KHQ8aDY8Q4dUDCAc&uact=5#imgrc=tqUHZy_HU17MWM:";
                $cost = "6.98";
                $totalCost += $cost;
                $vector->push($cost);
            }
        }
    } else {
        header("url=browse.php");
    }
    
    foreach($_SESSION as $img) {
        echo 'Your items are: ' . $_SESSION['pictures'] . ' Cost: ' . $vector . '<br>';
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