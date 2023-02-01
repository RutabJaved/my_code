<?php include 'header.php';

if (isset($_POST['deletebtn'])) {
    include "connection.php";
    echo $std_id = $_POST['sid'];


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
}

?>




<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>

</html>