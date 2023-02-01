<?php
$s_id = $_POST["sid"];
echo $std_name = $_POST["sname"];
echo "<br/>";
echo $std_adres = $_POST["saddress"];
echo "<br/>";
echo $std_class = $_POST["sclass"];
echo "<br/>";
echo $std_phone = $_POST["sphone"];

// create connection..!
include "connection.php";
// Update Data here..!
$sql = "UPDATE student SET sname = '{$std_name}' , saddress = '{$std_adres}' , sclass = '{$std_class}' , sphone= '{$std_phone}' WHERE sid = '{$s_id}'";
// make function for execute Query..!
$result = mysqli_query($conn, $sql) or die("Query Unseccessfull");

if ($result) {
    header("Location: http://project1.test/home.php");
} else {
    echo "Error in insert query";
}

mysqli_close($conn);
