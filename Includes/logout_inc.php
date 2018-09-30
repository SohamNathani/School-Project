<?php
session_start();
if (isset($_SESSION['u_login'])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
