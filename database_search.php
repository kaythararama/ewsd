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

$query="select * from user WHERE UserID=$userID OR Name=\"$name\"";      //retrieving all records
$ret=mysqli_query($connection, $query);

$num_result = mysqli_num_rows($ret);

echo "<p>There were $num_result results returned from the query.</p><br />";

echo "<table width=\"100%\" border=1>";
echo "<tr>";
echo "<th align=\"left\">UserID</th>";
echo "<th align=\"left\">Name</th>";
echo "<th align=\"left\">Address</th>";
echo "<th align=\"left\">Age</th>";
echo "</tr>";

for ($i=0; $i<$num_result; $i++)
{
    $row = mysqli_fetch_array($ret);
    echo"<tr>";
    echo "<td>".$row["UserID"]."</td>"; //field name = key name
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Address"]."</td>"; //field name = key name
    echo "<td>".$row["Age"]."</td>";
    echo"</tr>";
}
echo "</table>";
?>