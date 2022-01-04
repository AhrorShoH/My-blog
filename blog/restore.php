<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="My personal blog">
        <meta name="author" content="AhrorShoH">
        <meta name="keywords" content="PHP, MySQL, CSS, HTML">
        <title>Reset Password</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    </head>

<body><center>
    <div class="reg">
        <form action="#" method="POST">
            <table align="center">
                <h2 align="center">Reset Password</h2>
                <hr>
                <tr>
                    <td><b>
                        Login:</b></td><td>
                        <input type="text" name="login" placeholder="Login" required class="user">
                    </td>
                </tr>
                <tr>
                    <td><b>
                        New Password:</b></td><td>
                        <input type="password" name="password" placeholder="New Password" required class="user">
                    </td>
                </tr>
                <tr>
                    <td><b>
                    Confirm password:</b></td><td>
                        <input type="password" name="password2" placeholder="Confirm password" required class="user">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Send" title='Send' class="button">
                        <a href="login.php"><input type="button" value="Back" class="button" title="Back">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </center>
</body>
</html>

<?php
require_once("db.php");
//data verification
if(isset($_POST['login']) and isset($_POST['password']) and isset($_POST['password2']))
{
    //assign a data value to a variable
    $login=$_POST['login'];
    $password=$_POST['password'];
    $password2 = $_POST['password2'];
    //Confirm password(Check)
    if($password == $password2)
    {
        //update password via login
        $query="UPDATE malumotnoma SET password='$password' WHERE login='$login'";
        $result=$conn->query($query);
        //check that the data is up to date
        if($result)
        {
            echo "Data sent";
            header("location:login.php");
        }
        else{echo "There is an error in sending information";}
    }
    else {
        echo'<script> alert("Confirmation is incorrect!")</script>';
    }
}
?>