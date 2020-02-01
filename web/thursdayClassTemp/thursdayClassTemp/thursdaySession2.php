<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION['favcolor'];
   $a = $_SESSION['favanimal'];
   $g = $_SESSION["favgame"];
?>
<h1>Your favorite color is <?php=$c?> and your favorite animal is <?php=$a?> and your favorite game is <?php=$g?> </h1>

<?php
// set session variables using a form 
if(isset($_SESSION['pictureURL'])) { ?>

<h3> Again, Just for kicks... from a form</h3>
<img src="<?php=$_SESSION['pictureURL'] ?>" />

<?php }?>