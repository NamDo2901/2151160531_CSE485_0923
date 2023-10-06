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
        
        $sql2 ="DELETE FROM sach WHERE idTacGia = $id";    
        $sql = "DELETE FROM tacgia WHERE id = $id";

        
        $result2 = mysqli_query($conn, $sql2);
        $result1 = mysqli_query($conn, $sql);

        // Kiểm tra xem câu lệnh SQL đã thực thi thành công hay không
        if ($result1 && $result2) {
            // Bước 3: Xử lý kết quả
            $rowCount = mysqli_affected_rows($conn);
            if($rowCount > 0){
                header("Location: index.php?success=$id");
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    
    } catch(Exception $e){
        echo "Chưa kết nối";
    }
    
?>