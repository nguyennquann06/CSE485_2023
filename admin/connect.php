<?php

    $server ='localhost';
    $user  = 'root';
    $pass = '';
    $database = 'btth01_cse485';
    $conn = new mysqli($server, $user, $pass, $database);

    if($conn){
        mysqli_query($conn, "SET NAMES 'utf8' "); 
        // echo 'Da ket noi thanh cong!';
    }
    else{
        echo 'Ket noi khong thanh cong!';
    }

?>