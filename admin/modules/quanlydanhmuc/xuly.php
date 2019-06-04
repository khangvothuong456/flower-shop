<?php
    include('../../../core/config.php');

    $tenCL = $_POST['tenCL'];
    $thutuCL = $_POST['thutuCL'];

    if(isset($_POST['them']))
    {       
        $sql = "insert into loaisanpham(idCL,tenCL,thutuCL) values('','$tenCL','$thutuCL')";
        $row = "select * from loaisanpham where tenCL='$tenCL'"; // xem có tồn tại không
        if(mysqli_num_rows(mysqli_query($conn,$row))>0) // đã có tồn tại
        {
            echo "<script>alert('Loại sản phẩm này đã tồn tại!');window.location='../../index.php?quanly=themdanhmuc'</script>";   
        }
        else
        {
            mysqli_query($conn,$sql); 
            echo "<script>alert('Thêm loại sản phẩm này thành công!');window.location='../../index.php?quanly=themdanhmuc'</script>";         
        }
    }
    else if(isset($_POST['sua']))
    {   
        $sql = "update loaisanpham set tenCL='$tenCL', thutuCL='$thutuCL' where idCL='$_GET[id]'";
        $row = "select * from loaisanpham where tenCL='$tenCL'"; // xem có tồn tại không
        if(mysqli_num_rows(mysqli_query($conn,$row))>0) // đã có tồn tại
        {
            echo "<script>alert('Loại sản phẩm này đã tồn tại!');window.location='../../index.php?quanly=danhsachdanhmuc'</script>";   
        }
        else
        {
            mysqli_query($conn,$sql);
            echo "<script>alert('Sửa loại sản phẩm này thành công!');window.location='../../index.php?quanly=danhsachdanhmuc'</script>";   
        }              
    }
    else
    {
        $sql = "delete from loaisanpham where idCL='$_GET[id]'";
        mysqli_query($conn,$sql);
        header('location: ../../index.php?quanly=danhsachdanhmuc');
    }
?>