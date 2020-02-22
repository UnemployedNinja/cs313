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
        <form id = "loginForm" method = "POST">
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
                <td><button type = "submit" name = "login" value="Login">Login</button></td>
                <td><button type = "submit" name = "create" value="Create">Create</button></td>
            </tr>
            
        </table>
        </form>
    </div>
</body>

</html>