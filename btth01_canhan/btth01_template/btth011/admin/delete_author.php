<?php
// lay du lieu id can xoa
$mtg = $_GET['ma_tgia'];
echo $mtg;
require_once 'connect.php';
//cau lenh sql
$delete_sql = "Delete from tacgia where ma_tgia='$mtg'";
mysqli_query($conn  , $delete_sql);
//echo"<h1>Xoa thanh cong</h1>";
//tro ve trang liet ke
header("Location: author.php");
?>