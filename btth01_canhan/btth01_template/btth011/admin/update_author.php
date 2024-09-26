<?php
//nhan du lieu tu form
$mtg = $_POST['ma_tgia'];
$ttg = $_POST['ten_tgia'];
$htg = $_POST['hinh_tgia'];


// ket noi csdl
require_once 'connect.php'; 

// viet lenh sql de them du lieu
$addsql = "UPDATE tacgia SET ma_tgia = '$mtg', ten_tgia='$ttg', hinh_tgia='$htg' where ma_tgia='$mtg'";
// echo $addsql; exit ;

//thuc thi cau lenh
if(mysqli_query($conn, $addsql)){

//in thong bao thanh cong

header("Location: author.php");
}