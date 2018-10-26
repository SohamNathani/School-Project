<?php
session_start();

if (isset($_POST["reset"])) {
    $oldPasswd = $_POST["oldPassword"];
    $newPasswd = $_POST["newPassword"];
    $uid = $_POST["Username"];

    $hashedPasswd = password_hash($newPasswd, PASSWORD_DEFAULT);

    include_once "dbc_inc.php";

    $sql = "SELECT * FROM adminlogin WHERE user_name='$uid'";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 1) {
        if ($row = mysqli_fetch_assoc($result)) {
            $hashedCheck = password_verify($oldPasswd, $row["user_passwd"]);
            if ($hashedCheck) {
                $sql = "UPDATE adminlogin SET user_passwd='$hashedPasswd' WHERE user_name='$uid'";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);
                mysqli_stmt_execute($stmt);

                header("Location: ../login.php?PasswordReset");
                exit();
            } else {
                header("Location: ../reset.php?login1=error");
                exit();
            }
        }
    } else {
        header("Location: ../reset.php?login1=error1");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}