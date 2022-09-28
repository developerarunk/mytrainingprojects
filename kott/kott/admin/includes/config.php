<?php

$databasename="kotgangurai";
$host= "localhost";
$password="";
$username ="root";
$conn = mysqli_connect($host,$username,$password,$databasename);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>