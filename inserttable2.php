<?php
    $con = mysqli_connect("localhost","root","admin");
    if (!$con)
    { 	 die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,"mydb");

    $first="John";
    $last="Smith";
    $age=36;

    $res = mysqli_query($con,"INSERT INTO User (Name, Address, Age) VALUES ('$first', '$last', $age)");
    if(!$res){
        echo 'Something wrong' . mysqli_error();
    }else
        echo 'Insert 1 OK';

    $res =mysqli_query($con,"INSERT INTO User (Name, Address, Age) VALUES ('Alan2', 'Smith',33)");
    if(!$res){
        echo 'Something wrong' . mysqli_error();
    }else
        echo 'Insert 2 OK';

    mysqli_close($con);
?>
