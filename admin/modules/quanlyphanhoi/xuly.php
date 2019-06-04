<?php
    include('../../../core/config.php');
    
    if(isset($_GET['act'])=='xuly')
    {
        $id = $_GET['id'];
        $sql = "update phanhoi set statusPH = '1' where idPH='$id'";
        mysqli_query($conn,$sql);
        header('location: ../../index.php?quanly=danhsachphanhoi');
    }
    if(isset($_GET['act'])=='xoa')
    {
        //echo "<script>alert('Đã xóa.')</script>";
    }
?>