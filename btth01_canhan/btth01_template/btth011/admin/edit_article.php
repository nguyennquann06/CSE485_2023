<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
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
<?php
    //lay id can edit
    $ma_bviet = $_GET['ma_bviet'];

    //ket noi
    require_once 'connect.php';

    //cau lenh de lay thong tin sinh vien co id = sid
    $edit_sql = "select * from baiviet where ma_bviet=$ma_bviet" ;
    $result = mysqli_query( $conn, $edit_sql );
    $row = mysqli_fetch_array( $result );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit bài viết</title>
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
    <div class="container">
        <h1>Form update bài viết</h1>
        <form action="update_article.php" method="post">
            <div class="form-group">
                <label for="ma_bviet">
                    Mã bài viết  
                </label><input type="text" id="ma_bviet" class="form-control" name="ma_bviet">
            </div>
            <div class="form-group">
                <label for="tieude">
                    Tiêu đề
                </label><input type="text" id="tieude" class="form-control" name="tieude">
            </div>
            <div class="form-group">
                <label for="ten_bhat">
                    Tên bài hát
                </label><input type="text" id="ten_bhat" class="form-control" name="ten_bhat">
            </div>
            <div class="form-group">
                <label for="ma_tloai">
                    Mã thể loại
                </label><input type="text" id="ma_tloai" class="form-control" name="ma_tloai">
            </div>
            <div class="form-group">
                <label for="tomtat">
                    Tóm tắt
                </label><input type="text" id="tomtat" class="form-control" name="tomtat">
            </div>
            <div class="form-group">
                <label for="noidung">
                    Nội dung
                </label><input type="text" id="noidung" class="form-control" name="noidung">
            </div>
            <div class="form-group">
                <label for="ma_tgia">
                    Mã tác giả
                </label><input type="text" id="ma_tgia" class="form-control" name="ma_tgia">
            </div>
            <div class="form-group">
                <label for="ngayviet">
                    Ngày viết
                </label><input type="text" id="ngayviet" class="form-control" name="ngayviet">
            </div>
            <div class="form-group">
                <label for="hinhanh">
                    Hình ảnh
                </label><input type="text" id="hinhanh" class="form-control" name="hinhanh">
            </div>
            <button class="btn btn-success">Update bài viết</button>
        </form>
    </div>
</body>

</html>
