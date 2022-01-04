<!DOCTYPE HTML>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="My personal blog">
        <meta name="author" content="AhrorShoH">
        <meta name="keywords" content="PHP, MySQL, CSS, HTML">
        <title>Login</title>
        <link href = 'css/style.css' type='text/css' rel="stylesheet" media="all">
    </head>
<body><center>
    <div class="reg">
        <form action = "auth.php" method = 'POST'>
            <table align = "center">
                <h2 align='center'>Login width</h2>
                <hr>
                <tr>
                    <td><font size="4">Login:</font>
                        <input type = 'text' name = 'login' placeholder='Login' class='login' required title="Login">
                    </td>   
                </tr>
                <tr>
                    <td><font size="4">Password:</font>
                        <input name='password' class="password" type='password' placeholder="Password" title="Password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Login" class="button" title="Submit">
                        <a href="reg.php"><input type='button' class="button" value="Create account" title="Create account"></a>
                        <a href ="restore.php"><input type="button" class='button' value="Reset Password" title="Reset Password"></a>
                    </td>
                </tr>

            </table>
        </form>
    </div>
    </center>
</body>
</html>