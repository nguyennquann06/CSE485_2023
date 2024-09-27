<?php
//nhan du lieu tu form
$mbv = $_POST['ma_bviet'];
$tieude = $_POST['tieude'];
$tbh = $_POST['ten_bhat'];
$mtl = $_POST['ma_tloai'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$mtg = $_POST['ma_tgia'];
$date = $_POST['ngayviet'];
$hinhanh = $_POST['hinhanh'];


// ket noi csdl
require_once 'connect.php'; 

// viet lenh sql de them du lieu
$addsql = "UPDATE baiviet SET ma_bviet = '$mbv', tieude='$tieude', ten_bhat='$tbh', ma_tloai='$ma_tloai', tomtat='$tomtat', noidung='$noidung', ma_tgia='$ma_tgia', ngayviet='$ngayviet', hinhanh= '$hinhanh' where ma_bviet='$mbv'";
// echo $addsql; exit ;

//thuc thi cau lenh
if(mysqli_query($conn, $addsql)){

//in thong bao thanh cong

header("Location: article.php");
}