<!DOCTYPE html>
<html>
<body>

<?php

// if(!isset($_POST['submit'])) {
//     header("url=browse.html");
// } else {


    foreach(htmlspecialchars($_POST['season']) as $value) {
        $totalCost += $value;
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