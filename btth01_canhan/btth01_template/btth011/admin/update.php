<?php
//nhan du lieu tu form
$mtl = $_POST['ma_tloai'];
$ttl = $_POST['ten_tloai'];


// ket noi csdl
require_once 'connect.php'; 

// viet lenh sql de them du lieu
$addsql = "UPDATE theloai SET ma_tloai = '$mtl', ten_tloai='$ttl' where ma_tloai='$mtl'";
// echo $addsql; exit ;

//thuc thi cau lenh
if(mysqli_query($conn, $addsql)){

//in thong bao thanh cong

header("Location: category.php");
}