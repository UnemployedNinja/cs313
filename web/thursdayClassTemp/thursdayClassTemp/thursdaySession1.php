<?php
   // Start the session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         unset($_SESSION['pictureURL']);

         // Set session variables
         $_SESSION["favcolor"] = "green";
         $_SESSION["favanimal"] = "dolphin";
         $_SESSION["favgame"] = "Mass Effect";

         // echo that variables have been set
         echo "Session variable have been set.";

?>
      <a href="thursdaySession2.php">Check the variables on another page</a>

      <h3> Just for kicks, let's try this with a form </h3>

      <form action="" method="post">
         <input type="text" name="picture">
         <input type="submit" name="Submit" value="Submit!">

      </form>

      <?php
       // set session variables using a form 
         if(isset($_POST["Submit"])) {
            $_SESSION['pictureURL'] = $_POST['picture'];
         }
      
      ?>
   </body>
</html>