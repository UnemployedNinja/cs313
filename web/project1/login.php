<?php
    require("dbConnect.php");
    $db = get_db();
?>

<!DOCTYPE html>
<html>
<head> 
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "login.css">
    <title>Login</title>
</head>
<body>

    <div class = container4>
        <form id = "loginForm" method = "GET">
        <table align = "center" width = "25%">

            <tr>
                <th colspan = "3"><center><b>Movie List Login</b></center></th>
            </tr>

            <tr>
                <td>Username:</td>
                <td><input type = "text" name = "username" id = "usernameID" placeholder = "Username" required></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type = "password" name = "password" id = "passwordID" placeholder = "Password" required></td>
            </tr>

            <tr>
                <td><input type="Reset"></td>
                <td><button type = "submit" name = "login" >Login</button></td>
                <td><button type = "submit" name = "create" >Create</button></td>
            </tr>
            
        </table>
        </form>
    </div>

    <?php

        if (isset($_GET['login'])) {
            loginRequest();
        }

        if (isset($_GET['create'])) {
           createAccount();
        }

        function loginRequest() {

            session_start();
            $_SESSION['username'] = $_GET['username'];
            $_SESSION['password'] = $_GET['passsword'];

            $statement = $db->prepare("SELECT username, password FROM user_profile");
            $statement->execute();
            
            while($row = $statement->fetch(PDO::FETCH_ASSOC)) 
            {
               $username = $row['username'];
               $password = $row['password'];

              if($_SESSION['username'] == $username) {
                  if($_SESSION['password'] == $password) {
                    header("location: ./home.php");
                  }
              } else {
                echo "Invalid Username or Password!";
              }
            } 

        }

        function createAccount() {
            session_start();
            $_SESSION["username"] = $_GET['username'];
            $_SESSION["password"] = $_GET['passsword'];

            header("Refresh: 1; url=home.php");
        }

    ?>
</body>

</html>