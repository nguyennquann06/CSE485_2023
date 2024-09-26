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
        <h1>Danh sách thể loại</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Thêm thể loại
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã thể loại</th>
                    <th>Tên thể loại</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
        <?php
        //ket noi
        require_once'connect.php';
        $lietke_sql = "SELECT * FROM theloai ORDER BY ma_tloai";
        //thuc thi cai lenh
        $result = mysqli_query($conn, $lietke_sql);
        //duyet qua result va in ra
        while ($r = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $r['ma_tloai'];?></td>
                <td><?php echo $r['ten_tloai'];?></td>
                <td>
                    <a href="edit_category.php?ma_tloai=<?php echo $r['ma_tloai'];?>" class="btn btn-info">Sửa</a>  
                    <a onclick="return confirm('Bạn có muốn xóa thể loại này không?');" href="delete_category.php?ma_tloai=<?php echo $r['ma_tloai'];?>" class = "btn btn-danger">Xóa</a>
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
        <h4 class="modal-title">Thêm thể loại</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

      <!-- Modal body -->
    <div class="modal-body">
        <form action="add_category.php" method="post">
            <div class="form-group">
                <label for="ma_tloai">
                    Mã thể loại  
                </label><input type="text" id="ma_tloai" class="form-control" name="ma_tloai">
            </div>
            <div class="form-group">
                <label for="ten_tloai">
                    Tên thể loại
                </label><input type="text" id="ten_tloai" class="form-control" name="ten_tloai">
            </div>
            <button class="btn btn-success">Thêm thể loại</button>
        </form>
    </div>

      <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>

    </div>
  </div>
</div>    

            
    </div>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>