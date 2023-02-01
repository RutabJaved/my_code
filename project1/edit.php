<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    // Create Connection..!
    include "connection.php";
    // Getting id from URL through Super Global Variable..!
    $s_id = $_GET["id"];

    // get data from databas and join both table eachother..!
    $sql = "SELECT * FROM student WHERE student.sid = {$s_id}";

    // make function for Query run..!
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull..!");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row["sid"]; ?>" />
                    <input type="text" name="sname" value="<?php echo $row["sname"]; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row["saddress"]; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <?php
                    $sql1 = "SELECT * FROM studentclass";

                    // make function for Query run..!
                    $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessfull..!");
                    if (mysqli_num_rows($result1) > 0) {
                        echo '<select name="sclass">';
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            if ($row['sclass'] == $row1['cid']) {
                                $select = "selected";
                            } else {
                                $select = "";
                            }


                            echo '<option ' . $select . ' value="' . $row1["cid"] . '">' . $row1["cname"] . '</option>';
                        }
                        echo "</select>";
                    }
                    ?>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row["sphone"]; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>
    <?php
        }
        //  Purple one is for While loop..!
    }
    // yellow one is for if  condition..!
    ?>
</div>
</div>
</body>

</html>