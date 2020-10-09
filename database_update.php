<?php

$userID = $_POST["userID"];
$name = $_POST["name"];

$host="localhost";
$user="root";
$pass="admin";
$database="mydb";
// connecting to database server
$connection=mysqli_connect($host,$user,$pass)
or die("Couldn’t connect to datbase");

// selecting the database
mysqli_select_db($connection, $database);
$query="UPDATE user SET Name=\"$name\" WHERE UserID=$userID";      //retrieving all records
$ret=mysqli_query($connection, $query);
?>