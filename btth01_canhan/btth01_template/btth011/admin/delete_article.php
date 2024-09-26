<?php
// lay du lieu id can xoa
$mbv = $_GET['ma_bviet'];
echo $mtg;
require_once 'connect.php';
//cau lenh sql
$delete_sql = "Delete from baiviet where ma_bviet='$mbv'";
mysqli_query($conn  , $delete_sql);
//echo"<h1>Xoa thanh cong</h1>";
//tro ve trang liet ke
header("Location: article.php");
?>