<?php
    if(isset($_GET['key']))
    {
        if($_GET['key'] == 'all')
        {
            unset($_SESSION['cart']);
            echo "<script>alert('Xóa sản phẩm thành công giỏ hàng!');window.location='index.php?act=listcart';</script>";    
        }
        else
        {
            $key = $_GET['key'];
            unset($_SESSION['cart'][$key]);
            echo "<script>alert('Xóa sản phẩm thành công sản phẩm!');window.location='index.php?act=listcart';</script>";    
        }
    }
    else
        echo "<script>alert('Xóa sản phẩm thất bại!');window.location='index.php?act=listcart';</script>";
?>