<?php
    if(isset($_GET['item']))
    {
        $k = $_GET['k']; // xem nó là loại nào
        $p = $_GET['p']; // xem nó là trang nào
        $id = $_GET['item']; // xem nó là sản phẩm nào
        
        $sql = "select * from sanpham where idSP='$id'";
        $run = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($run,MYSQLI_ASSOC);

        if(!empty($_SESSION['cart'])) // tồn tại giỏ hàng
        {
            $cart = $_SESSION['cart'];
            if(array_key_exists($id,$cart)) // có trùng
            {
                $cart[$id] = array(
                    'tenSP'=>$row['tenSP'],
                    'hinhanhSP'=>$row['hinhanhSP'],
                    'maSP'=>$row['maSP'],
                    'giaSP'=>$row['giaSP'],
                    'sl'=>$cart[$id]['sl']+1
                );
            }
            else // không trùng
            {
                $cart[$id] = array(
                    'tenSP'=>$row['tenSP'],
                    'hinhanhSP'=>$row['hinhanhSP'],
                    'maSP'=>$row['maSP'],
                    'giaSP'=>$row['giaSP'],
                    'sl'=>1
                );
            }
        }
        else // giỏ hàng chưa tồn tại?
        {
            $cart[$id] = array(
                'tenSP'=>$row['tenSP'],
                'hinhanhSP'=>$row['hinhanhSP'],
                'maSP'=>$row['maSP'],
                'giaSP'=>$row['giaSP'],
                'sl'=>1
            );
        }
        $_SESSION['cart'] = $cart;
        if($k)
            echo "<script>window.location='index.php?act=loaisanpham&id=$k&page=$p';</script>";
        else
            echo "<script>window.location='index.php';</script>";
    }
    else
    {
        // quay về trang chủ
    }
?>