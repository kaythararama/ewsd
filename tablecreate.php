<?php
    $con = mysqli_connect("localhost","root","admin");

    if (!$con) {
        die('Could not connect: ' . mysqli_error( ));
    }

    mysqli_select_db($con,"mydb");

    $query="CREATE TABLE user1(  FirstName varchar(15), SurName varchar(15) )";

    $ret=mysqli_query( $con, $query );
    if($ret) {
        echo "<p>Table created!</p>";

    } else {
        echo "<p>Something went wrong: ", mysqli_error() + "</p>";
    }
    mysqli_close($con);

?>
