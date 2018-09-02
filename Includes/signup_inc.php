<?php

$uid = $_POST["user_id"];
$upasswd = $_POST["user_passwrd"];

include_once "dbc_inc.php";
//hashing the password
$hashedPasswd = password_hash($upasswd, PASSWORD_DEFAULT);

$sql = "INSERT INTO adminlogin(user_name, user_passwd) VALUES('$uid', '$hashedPasswd')";
mysqli_query($conn, $sql);