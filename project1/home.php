<!--  -->

<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form</title>
</head>

<body>
    <div id="main-content">
        <h2>Student Data</h2>
        <?php
        // Create Connection..!
        include "connection.php";
        // get data from databas and join both table eachother..!
        $sql = "SELECT * FROM student JOIN studentclass ON student.sclass = studentclass.cid";

        // make function for Query run..!
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull..!");
        if (mysqli_num_rows($result) > 0) {

        ?>

            <table cellpadding="10px" border="1px">
                <thead>
                    <th>S_id</th>
                    <th>S_Name</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <!-- fatching Data From Database -->
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["sid"] ?></td>
                            <td><?php echo $row["sname"] ?></td>
                            <td><?php echo $row["saddress"] ?></td>
                            <td><?php echo $row["cname"] ?></td>
                            <td><?php echo $row["sphone"] ?></td>
                            <td><a href="edit.php?id=<?php echo $row["sid"]; ?>">Edit</a>
                                <a href="delete-inline.php?id=<?php echo $row["sid"]; ?>"> Delete </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        <?php
        } else {
            echo "<h2>Data not Found..!</h2>";
        }
        ?>

    </div>
    <!-- close connection -->
    <?php
    mysqli_close($conn);
    ?>












    <!-- <form action="data_view.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="userpass" /></td>
            </tr>
            <tr>
                <td><input type="file" name="file_image" /></td>
            </tr>
            <tr>
                <td><button type="submit" name="btn">Submit</button></td>
            </tr>
        </table>
    </form> -->


</body>

</html>

<?php
// if (isset($_POST["btn"])) {
//     $username = $_POST["username"];
//     $userpass = $_POST["userpass"];
//     $file_name = $_FILES["file_image"]['name'];
//     $file_size = $_FILES["file_image"]['size'];
//     $file_tmp = $_FILES["file_image"]['tmp_name'];
//     $file_type = $_FILES["file_image"]['type'];

//     echo $username;
//     echo '<br/>';
//     echo '<br/>';
//     echo $userpass;
//     echo '<br/>';
//     echo '<br/>';
//     echo $userimage;



//     $upload = move_uploaded_file($file_tmp, "imges-upload/" . $file_name);

// }

?>

<?php
// echo "Testing.."

// way to connect Database MySQLi
// Connect to the Database

// $servername = "localhost";
// $username = "root";
// $password = "";


// create a connection
// $conn = mysqli_connect($servername , $username , $password)

// echo $conn;
?>