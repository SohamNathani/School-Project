<?php
if (isset($_REQUEST['delid'])) {
    $deleteid = $_REQUEST['delid'];
    $deleteName = $_REQUEST['delname'];

    $filePath = "../assets/Images/activity/".$deleteName;

    unlink($filePath);

    include_once "dbc_inc.php";

    $sql = "DELETE FROM activity_pics WHERE pic_id =".$deleteid;
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);

    header("Location: ../activity.php?delete_successfull");
    exit();
}