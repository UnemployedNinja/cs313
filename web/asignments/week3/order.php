<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="ShopHome.css">
        <title>Browse</title>
    </head>
    
    <body>
        
        <ul>
            <li><a href="ShopHome.html">Home</a></li>
            <li><a class="active" href="browse.html">Browse</a></li>
        </ul>

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