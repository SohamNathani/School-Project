<?php

$number_of_row_per_page = 9;

if (isset($_GET['page'])) {
    $page_no = $_GET['page'];
} else {
    $page_no = 1;
}
include_once 'dbc_inc.php';

$stmt = mysqli_stmt_init($conn);
$sql = 'SELECT * FROM activity_pics ORDER BY pic_id DESC';
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$number_of_row = mysqli_num_rows($result);

$total_no_of_pages = ceil($number_of_row/$number_of_row_per_page);

$start_point = ($page_no-1)*$number_of_row_per_page;

$_SESSION['number_of_row_per_page'] = $number_of_row_per_page;
$_SESSION['page_no'] = $page_no;
$_SESSION['total_no_of_pages'] = $total_no_of_pages;
$_SESSION['start_point'] = $start_point;

if (isset($_REQUEST['page2'])) {
    header('Location: ../activity.php?page='.$page_no);
}