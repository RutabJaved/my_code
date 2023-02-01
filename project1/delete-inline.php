<?php
$std_id = $_GET['id'];

include "connection.php";

// Delete Data from DataBase..!
$sql = "DELETE FROM student WHERE sid = {$std_id}";
// make function for Query run..!
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull..!");

if (mysqli_affected_rows($conn) > 0) {
    header("Location: http://project1.test/home.php");
} else {
    echo "Data is not Deleted Successfully..!";
}
mysqli_close($conn);
