<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
if (isset($_POST["btn"])) {
    $username = $_POST["username"];
    $userpass = $_POST["userpass"];
    $file_name = $_FILES["file_image"]['name'];
    $file_size = $_FILES["file_image"]['size'];
    $file_tmp = $_FILES["file_image"]['tmp_name'];
    $file_type = $_FILES["file_image"]['type'];

    echo $username;
    echo '<br/>';
    echo '<br/>';
    echo md5($userpass) ;
    echo '<br/>';
    echo '<br/>';
    echo $file_name;



   move_uploaded_file($file_tmp, "imges-upload/" . $file_name);
   
}

?>