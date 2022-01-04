<?php
session_start();
    //login to index.php if no login
if(!isset($_SESSION['login']))
{
    header("location:login.php");
    exit;
}
?>