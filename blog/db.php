<?php
$host = "localhost";
$dbuser = "root";
$dbname = "foydalanuvchilar";
$dbpass = '';
//Create connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
    //Check connection
    if($conn->connect_error)
    {
        die("There is an error in sending information: ".$conn ->connect_error);
    }
    ?>