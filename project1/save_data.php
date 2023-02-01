<?php
echo $std_name = $_POST["sname"];
echo "<br/>";
echo $std_adres = $_POST["saddress"];
echo "<br/>";
echo $std_class = $_POST["class"];
echo "<br/>";
echo $std_phone = $_POST["sphone"];

// create connection..!
include "connection.php";
// Set Data into Database..!
// $sql = "INSERT INTO student(sname , saddress , sclass , sphone) VALUES ({'$std_name'}, {'$std_adres'}, {'$std_class'}, {'$std_phone'})";
$sql = "INSERT INTO student(sname , saddress , sclass , sphone) VALUES ('$std_name', '$std_adres', '$std_class', '$std_phone')";

// make function for Run Query..!
$result = mysqli_query($conn, $sql) or die("Query Unseccessfull");

if ($result) {
    header("Location: http://project1.test/home.php");
} else {
    echo "Error in insert query";
}

mysqli_close($conn);
