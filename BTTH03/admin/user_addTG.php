<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Homepage</title>
    <link href="../admin/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/cdn.jsdelivr.net_npm_bootstrap-icons@1.11.0_font_bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="../admin/fonts.googleapis.com_css2_family=Poppins&display=swap.css" rel="stylesheet">
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
                <?php
                    if(isset($_GET['error'])){
                        echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                    }
                ?>
                <h3 class=" text-center text-uppercase">Them tac gia</h3>
                <form action="process_user_addTG.php" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            id
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="id" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            tenTacGia
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="tenTacGia" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSaver">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../admin/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>