<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>

<body>
    <div id="main-content">
        <h2>Add New Record</h2>
        <form class="post-form" action="save_data.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="sname" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="saddress" />
            </div>
            <div class="form-group">
                <label>Class</label>
                <select name="class">
                    <option value="" selected disabled>Select Class</option>
                    <?php
                    // create connection..!
                    include "connection.php";
                    // Getting Data from Database..!
                    $sql = "SELECT * FROM studentclass";
                    // create a Function for Query Run..!!
                    $result = mysqli_query($conn, $sql) or die("Query Unseccessfull..!");
                    // Fecthing Data here..!
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <option value="<?php echo $row["cid"] ?>"><?php echo $row["cname"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="sphone" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
    </div>
</body>

</html>

</body>

</html>