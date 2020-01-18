<?php 

// https://stackoverflow.com/questions/18379238/send-email-with-php-from-html-form-on-submit-with-the-same-script
   
if($_POST["name"] != "" && $_POST["email"] != "" && $_POST["comment"] != "") {

    $to = "phi13025@byui.edu";      // My email
    $name = $_POST["name"];          // Sender name
    $email = $_POST["email"];        // Sender email
    $comment = $_POST["comment"];    // Sender comments
    $subject = "Assignment Homepage HTML email";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $email . "\r\n";

    mail($to,$subject,$comment);
    // mail($email,$subject,$name,$myEmail); // Send copy to sender

    echo "And email was sent Shawn. Thank you for your feedback " . $name;

   // header("Location: Assignment Homepage.html");

} else {
    echo "Please fill out all the fields before trying to submit";
}
echo "<br> <br>";
echo "Redirecting page...";
header("Refresh: 3; url=Assignment Homepage.html");
    
?>
