<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="My personal blog">
        <meta name="author" content="AhrorShoH">
        <meta name="keywords" content="PHP, MySQL, CSS, HTML">
        <title>Create account</title>
        <link href='css/style.css' type='text/css' rel="stylesheet" media="all">
    </head>
<body><center>
    <div class="reg">
        <form action="#" method='POST'>
            <table align='center'>
                <h2 align='center'>Create account</h2>
                <hr>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type='text' class="user" name="name" placeholder="Name" title='Name' required>
                    </td>
                </tr>
                <tr>
                    <td>Surname:</td>
                    <td>
                        <input type='text' class="user" name="surname" placeholder="Surname" title="Surname" required>
                    </td>
                </tr>
                <tr>
                    <td>Login:</td>
                    <td>
                        <input type='text' class="user" name="login" placeholder="Login" required title="Login">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input name='password' class="user" type="password" required placeholder='Password'title='Password'>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <input type="submit" value='Save' class="button" title="Save">
                        <a href="login.php"><input type="button" value="Back" class="button" title="Back"></a>
                    </td>
                </tr>
            </table>
        </form>
    </div></center>
</body>
</html>


<?php
require_once("db.php");
//data verification
if(isset($_POST['name']) and isset($_POST['surname'])and isset($_POST['login'])
and isset($_POST['password'])) 
{
    //assign a data value to a variable 
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $login=$_POST['login'];
    $password=$_POST['password'];

             //entering data into a database
    $query="INSERT INTO malumotnoma (name, surname, login, password) VALUES ('$name', '$surname', '$login', '$password');";
    $result=$conn->query($query);
//Determine if the data has been sent to the database
    if($result)
    {
   echo "Data sent";
        header("location:login.php");
    }
    else{echo "There is an error in sending information";}
}
?>