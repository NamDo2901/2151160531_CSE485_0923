<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    try {
        // Bước 1: Mở kết nối
        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "quanlythuvien";
    
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);  // Báo cáo lỗi
    
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    
        // Bước 2: Thực hiện truy vấn
        $n = ($page -1) * 10;
        //$sql = "SELECT * FROM users ORDER BY created_at DESC LIMIT 10 OFFSET $n";//có cột create_at trong sql
        $sql = "SELECT * FROM tacgia ORDER BY id DESC LIMIT 10 OFFSET $n";
        $result = mysqli_query($conn, $sql);
    
        // Bước 3: Xử lý kết quả
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    } catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        include "layout/sidebar.php";
        ?>
        <div class="col-md-9 main">
            <?php
            include "layout/header.php";
            ?>
            <div class="main-content vh-100 p-3">
                <h3 class=" text-center text-uppercase">Danh sach Tac Gia</h3>
                <a href="user_addTG.php" class="btn btn-success"><i class="bi bi-person-add"></i> Them Tac Gia</a>
                <?php
                     if(isset($_GET['success'])){
                         $id = $_GET['success'];
                         echo "<h2 style='color:red'>Tac gia va sach co id Tac Gia: {$id} da bi xoa</h2>";
                     }
                ?>
                <table class="table">
                    <thead>
                    <tr>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">tenTacGia</th>
                        </tr>                
                    </thead>
                    <tbody>
                    <?php
                    foreach($users as $user){
                        ?>
                        <tr>
                            <th scope="row">
                                <?//= $user[0]; ?>
                                <?= $user['id']; ?>
                            </th>
                            <td>
                                <?//= $user[1]; ?>
                                <?= $user['tenTacGia']; ?>
                            </td>
                            <td>
                                <a href="user_detailTG.php?id=<?= $user['id']; ?>">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </td>
                            <td>
                                <a href="user_editTG.php?id=<?= $user['id']; ?>">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#<?= $user['id']; ?>">
                                    <i class="bi bi-trash3"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $user['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xoa tac gia</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Ban chac chan muon xoa tac gia co id: <?= $user['id']; ?>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="user_deleteTG.php?id=<?= $user['id']; ?>" class="btn btn-success">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?page=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="index.php?page=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>