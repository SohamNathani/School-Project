<?php

if (isset($_POST["Login"])) {
    //including database connection file
    include_once "dbc_inc.php";

    //taking input from users
    $uid = mysqli_real_escape_string($conn, $_POST["Username"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["Password"]);

    //checking for username
    $sql = "SELECT * FROM adminlogin WHERE user_name='$uid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../login.php?login=error");
        exit();
    }else {
        if ($row = mysqli_fetch_assoc($result)) {
            //verifying password
            $hashedCheck = password_verify($pwd, $row["user_passwd"]);
            if ($hashedCheck) {
                header("Location: ../loggedin.php");
                exit();
            } else {
                header("Location: ../login.php?login=error");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}