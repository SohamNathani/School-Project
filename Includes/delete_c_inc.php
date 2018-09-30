<?php
session_start();
if (isset($_REQUEST["delc"])) {
    include "dbc_inc.php";

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM activity_c ORDER BY c_id ASC";
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_assoc($result)){
        $c_filePath = "../assets/Images/activity/".$row["c_name"];

        unlink($c_filePath);

        $stmt = mysqli_stmt_init($conn);
        $sql = "DELETE FROM activity_c WHERE c_id=".$row['c_id'];
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_execute($stmt);
    }

    header("Location: ../activity.php?c_delete_success");
    exit();
}