<?php
    include('../../../core/config.php');
    /*
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
    */
    
    // cập nhật trang thái của đơn hàng
    if(isset($_GET['idDH']) && isset($_GET['statusDH']))
    {
        $idDH = $_GET['idDH'];
        $statusDH = $_GET['statusDH'];
        $sql = "update donhang set statusDH = '$statusDH' where idDH='$idDH'";
        mysqli_query($conn,$sql);
        header('location: ../../index.php?quanly=chitietdonhang&id='.$idDH);
    }
?>