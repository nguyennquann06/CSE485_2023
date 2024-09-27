<?php
    $servername = "localhost"; 
    $username = "root";       
    $password = "";           
    $dbname = "btth01_cse485"; 

    // Tạo kết nối
    $conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
?>
