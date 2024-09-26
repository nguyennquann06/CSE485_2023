<?php
// lay du lieu id can xoa
$mtl = $_GET['ma_tloai'];
echo $mtl;
require_once 'connect.php';
//cau lenh sql
$delete_sql = "Delete from theloai where ma_tloai='$mtl'";
mysqli_query($conn  , $delete_sql);
//echo"<h1>Xoa thanh cong</h1>";
//tro ve trang liet ke
header("Location: category.php");
?>