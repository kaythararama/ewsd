<?php
    $con = mysqli_connect("localhost","root","admin");
    mysqli_select_db( $con, "mydb");
    $sql = "CREATE TABLE User  (
    UserID  int NOT NULL  AUTO_INCREMENT,
    PRIMARY KEY(UserID),
    Name varchar(15),
    Address varchar(50),
    Age int
    )";
    $res = mysqli_query($con, $sql);     // Execute query
    if( $res ){
        echo 'Table created';
    }
    mysqli_close($con);
?>