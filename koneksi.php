<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_buku"; // nama database nya

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn){
        echo"koneksi berhasil";
    }else{
        echo "koneksi gagal";
    }

?>