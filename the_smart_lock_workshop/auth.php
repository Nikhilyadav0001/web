<?php

$servername="localhost";
$dbname = "u931";
$username = "u930001";
$password = "nikhil";

$link=mysqli_connect($servername,$username, $password,$dbname);

if(!$link)
{
    echo "error";
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



?>

