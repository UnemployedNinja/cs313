<?php 

// https://stackoverflow.com/questions/18379238/send-email-with-php-from-html-form-on-submit-with-the-same-script
echo "Email was sent. Thank you " . $name;
    if(isset($_POST['submit'])) {

        $myEmail = "phi13025@byui.edu";      // My email
        $name = $_POST["name"];          // Sender name
        $email = $_POST["email"];        // Sender email
        $comment = $_POST["comment"];    // Sender comments
        $subject = "Assignment Homepage";

        // mail($myEmail,$subject,$comment,$email);
        // mail($email,$subject,$name,$myEmail); // Send copy to sender
        echo "Email was sent. Thank you " . $name;

    }
    echo "Email was sent. Thank you " . $name;


   // header("Location: Assignment Homepage.html");
        
?>
