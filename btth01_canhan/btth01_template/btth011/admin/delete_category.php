<?php
// lay du lieu id can xoa
<<<<<<< HEAD
$mtl = $_GET['ma_tloai'];
echo $mtl;
require_once 'connect.php';
//cau lenh sql
$delete_sql = "Delete from theloai where ma_tloai='$mtl'";
=======
$ma_tloai = $_GET['ma_tloai'];
echo $ma_tloai;
require_once 'connect.php';
//cau lenh sql
$delete_sql = "Delete from theloai where ma_tloai='$ma_tloai'";
>>>>>>> 3a4e515c4bcdeb96c79a12bf766b0256bd47e0cb
mysqli_query($conn  , $delete_sql);
//echo"<h1>Xoa thanh cong</h1>";
//tro ve trang liet ke
header("Location: category.php");
?>