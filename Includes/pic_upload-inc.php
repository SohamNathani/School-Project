<?php
session_start();
if (isset($_POST['submit'])) {
    $file = $_FILES['pic_file'];
    $fileCaption = $_POST['description'];

    $flieTemplocation = $file['tmp_name'];
    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileType = $file['type'];

    $fileUniqueName = md5(uniqid(rand(), true));

        

    $fileDestination = "../assets/Images/activity/". $fileUniqueName . "." . $fileName;
    $fileFullName = $fileUniqueName . "." . $fileName;

    include "dbc_inc.php";

    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO activity_pics (pic_name, pic_description) VALUES (?,?);";
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $fileFullName, $fileCaption);
    mysqli_stmt_execute($stmt);

    move_uploaded_file($flieTemplocation, $fileDestination);

    header ("Location: ../activity.php?upload_success");
}

?>