<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="category.php">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="author.php">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">Bài viết</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="container">
        <h1>Danh sách tác giả</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Thêm tác giả
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã tác giả</th>
                    <th>Tên tác giả</th>
                    <th>Hình ảnh tác giả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
        <?php
        //ket noi
        require_once'connect.php';
        $lietke_sql = "SELECT * FROM tacgia ORDER BY ma_tgia";
        //thuc thi cau lenh
        $result = mysqli_query($conn, $lietke_sql);
        //duyet qua result va in ra
        while ($r = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $r['ma_tgia'];?></td>
                <td><?php echo $r['ten_tgia'];?></td>
                <td><?php echo $r['hinh_tgia'];?></td>
                <td>
                    <a href="edit_author.php?ma_tgia=<?php echo $r['ma_tgia'];?>" class="btn btn-info">Sửa</a> 
                    <a onclick="return confirm('Bạn có muốn xóa tác giả này không?');" href="delete_author.php?ma_tgia=<?php echo $r['ma_tgia'];?>" class = "btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
    <div class="modal" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">Thêm tác giả</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

      <!-- Modal body -->
    <div class="modal-body">
        <form action="add_author.php" method="post">
            <div class="form-group">
                <label for="ma_tgia">
                    Mã tác giả  
                </label><input type="text" id="ma_tgia" class="form-control" name="ma_tgia">
            </div>
            <div class="form-group">
                <label for="ten_tgia">
                    Tên tác giả
                </label><input type="text" id="ten_tgia" class="form-control" name="ten_tgia">
            </div>
            <div class="form-group">
                <label for="hinh_tgia">
                    Hình tác giả
                </label><input type="text" id="hinh_tgia" class="form-control" name="hinh_tgia">
            </div>           
            <button class="btn btn-success">Thêm tác giả</button>
        </form>
    </div>