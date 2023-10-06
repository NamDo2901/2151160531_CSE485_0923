<?php
if(isset($_POST['sbmSaver'])){
    $id = $_POST['id'];
    $tenTacGia=$_POST['tenTacGia'];
//    $pass2 = $_POST['pass2'];

//    if($pass1 != $pass2){
//        $error = "Mật khẩu không khớp";
//        header("Location: user_add.php?error=$error");
//    }

    try {
        // Bước 1: Kết nối DBServer
        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "quanlythuvien";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  // Báo cáo lỗi

        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

        // Bước 2: Thực hiện truy vấn
        $sql_check = "SELECT * FROM tacgia WHERE id = '$id' ";
        $result = mysqli_query($conn, $sql_check);

        // Bước 3: Xử lý kết quả
        if(mysqli_num_rows($result) > 0){
            header("Location:user_addTG.php?error=existed");
          } else {
            $sql_insert = "INSERT INTO tacgia (id, tenTacGia) VALUES ('$id', '$tenTacGia')";
            if(mysqli_query($conn, $sql_insert)){
                header("Location:user_addTG.php?error=added");
            }
        }

    } catch(Exception $e){
        echo "chưa kết nối";
    }

}