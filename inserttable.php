<?php
    $con = mysqli_connect("localhost","root","admin");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,"mydb");

    $query="INSERT INTO User
    (Name, Address) VALUES('MaMa', 'Yangon')";
    $ret=mysqli_query( $con, $query );

    if($ret) {
        echo "<p> User Table is inserted!</p>";

    } else {
        echo "<p>Something went wrong: ", mysqli_error() + "</p>";
    }
    mysqli_close($con);
?>