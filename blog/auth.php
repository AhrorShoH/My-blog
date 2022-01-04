<?php
require_once("db.php");
session_start();
//Check the information sent from login.php
if(isset($_POST['login']) and isset($_POST['password']))
{
    $login = $_POST['login']; 
    $password = $_POST['password']; 
    //selection of data in the database
    $query = "select * from malumotnoma where login = '$login' and password = '$password'";
    $result = $conn -> query($query);
    
if($result->num_rows>0){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    }
}
    //login verification
if(isset($_SESSION['login']))
{
    
    header("location:html/mypage.html");
    exit;
}
   
else{
    header("location:login.php");
    exit;
}
?>