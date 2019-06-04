<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hoatuoialumbale';
    $conn = mysqli_connect($hostname,$username,$password,$dbname);
    if(!$conn)
    {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,$dbname);    
    mysqli_set_charset($conn,"utf8");
?>