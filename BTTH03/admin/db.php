<?php
    $db_server ="localhost";
    $db_user ="root";
    $db_pass ="";
    $db_name ="quanlythuvien";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  // Báo cáo lỗi

    try {
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    } catch(Exception $e) {
        echo "Chưa kết nối";
        exit;  // Dừng chương trình
    }
?>
