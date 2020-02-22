<?php
    try {
        require "dbConnect.php";
        $db = get_db();
    } catch (Exception $e) {
        echo "This is the error: $e";
        exit;
    }

    $username = htmlspecialchars($_POST["username"]);    
    $password = htmlspecialchars($_POST["password"]);
    $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

    if (strlen($password) < 7) {
        header("Location: login.php?lengthError=1");
        die();
    }
    if ($password != $confirmPassword) {
        header("Location: login.php?confirmError=1");
        die();
    } 
    // if(ctype_alnum($password)) {
    //     header("Location: login.php?alphaNumError=1");
    //     die();
    // }
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $statement = $db->prepare('INSERT INTO user_profile (username, password) 
                                    VALUES (:username, :pass_hash)');
        $statement->bindValue(':username', $username);
        $statement->bindValue(':pass_hash', $pass_hash);
        $statement->execute();
        header("Location: login.php");
        die();
    } catch (\Throwable $e) {
        echo "Error: $e";
    }
?>