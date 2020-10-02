<?php

    $con = mysqli_connect("localhost","root","admin");

    if (!$con) {
        die('Could not connect: ' . mysqli_error());
    }
    if (mysqli_query( $con, "CREATE DATABASE mydb"))  {
        echo "Database created";

    } else  {
        echo "Error creating database: " . mysqli_error();
    }
    mysqli_close($con);
?>
