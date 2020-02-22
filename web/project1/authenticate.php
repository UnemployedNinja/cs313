<?php

    session_start();

    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        echo "This is the error: $e";
        exit;
    }

    $authenticate = false;
    $username = htmlspecialchars($_POST["username"]);    
    $password = htmlspecialchars($_POST["password"]);
    $_SESSION['username'] = $_POST['username'];
 
    try {

        $statement = $db->prepare('SELECT password FROM user_profile WHERE username = :username');
        $statement->bindValue(':username', $username);
        $statement->execute();
        var_dump($username);
    
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($password, $row["password"])) {
                $authenticate = true;
            }
        }
        if ($authenticate == true) {
            header("Location: home.php");
        } else {
            header("Location: login.php");
        }
    } catch (Exeption $e) {
        die();
    }

?>