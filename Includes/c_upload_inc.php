<?php
if (isset($_POST['submit_c'])) {

    include "dbc_inc.php";

        $total = count($_FILES['c_file']['name']);
        $description = $_POST['c_description'];

        for ($i = 0; $i < $total; $i++) {
            
        $fileUniqueName = md5(uniqid(rand(), true));
        $fileFullName = $fileUniqueName . "." . $_FILES['c_file']['name'][$i];

        $file_id = $i+1;
        
        $tmpFilePath = $_FILES['c_file']['tmp_name'][$i];
        
        $stmt = mysqli_stmt_init($conn);
        $sql = "INSERT INTO activity_c (c_id, c_name, c_description) VALUES (?, ?, ?);";
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "iss", $file_id, $fileFullName, $description);
        mysqli_stmt_execute($stmt);

    if ($tmpFilePath != "") {

            $newFilePath = "../assets/Images/activity/" .$fileFullName;

            move_uploaded_file($tmpFilePath, $newFilePath);
    
        }
    }
    header("Location: ../activity.php?c_upload_success");
    exit();
}