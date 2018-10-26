<?php
session_start();

if (isset($_POST["Login"])) {
    //including database connection file
    include_once "dbc_inc.php";

    //taking input from users
    $uid = $_POST['Username'];
    $pwd = $_POST["Password"];

    //checking for username
    $sql = "SELECT * FROM adminlogin WHERE user_name='$uid'";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck == 1) {
        if ($row = mysqli_fetch_assoc($result)) {
            $hashedCheck = password_verify($pwd, $row["user_passwd"]);
            if ($hashedCheck) {
                $_SESSION["u_login"] = $row["user_id"];
                header("Location: ../index.php?adminLoggedIn");
                exit();
            } else {
                header("Location: ../login.php?login1=error");
                exit();
            }
        }
    } else {
        header("Location: ../login.php?login1=error1");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}