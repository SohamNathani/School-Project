<?php
session_start();
if (isset($_POST['submit_n'])) {
    $event_name = $_POST['event'];
    $day = $_POST['Day'];
    $month = $_POST['Month'];
    $time = $_POST['time'];

    include_once 'dbc_inc.php';
    $stmt = mysqli_stmt_init($conn);
    $sql = "INSERT INTO news (event_name, day, month, time) VALUES (?, ?, ?, ?)";
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "siss", $event_name, $day, $month, $time);
    mysqli_stmt_execute($stmt);

    header("Location: ../index.php?upload_success");
    exit();
}