<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    try {
        // Bước 1: Kết nối DBServer
        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "quanlythuvien";
    
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  // Báo cáo lỗi
    
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    
        // Bước 2: Thực hiện truy vấn
        $sql = "DELETE FROM sach WHERE id = $id";
        $result = mysqli_query($conn, $sql);
    
        // Bước 3: Xử lý kết quả
        $rowCount = mysqli_affected_rows($conn);
        if($rowCount > 0){
            header("Location: user_management.php?success=$id");
        }
    
    } catch(Exception $e){
        echo "Chưa kết nối";
    }
    
?>