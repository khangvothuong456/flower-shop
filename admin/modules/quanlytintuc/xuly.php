<?php
    include('../../../core/config.php');
   
    $tenTT=$_POST['tenTT'];
    $tenTT_kd=$_POST['tenTT_kd'];
    $idUser=$_POST['idUser'];
    $ngaydangTT =$_POST['ngaydangTT'];
    $ngaytuTT =$_POST['ngaytuTT'];
    $ngaydenTT =$_POST['ngaydenTT'];
    $motaTT=$_POST['motaTT'];
	$hinhanhTT =$_FILES["hinhanhTT"]["name"];
	$hinhanhTT_tmp=$_FILES["hinhanhTT"]["tmp_name"];
	move_uploaded_file($hinhanhTT_tmp,"../../uploads/".$hinhanhTT);	
    if(isset($_POST['them']))
    {
        $sql = "insert into tintuc (idTT,tenTT,tenTT_kd,idUser,ngaydangTT,ngaytuTT,ngaydenTT,motaTT,hinhanhTT) 
                values ('','$tenTT','$tenTT_kd','$idUser','$ngaydangTT','$ngaytuTT','$ngaydenTT','$motaTT','$hinhanhTT')";
        mysqli_query($conn,$sql);
        header('location: ../../index.php?quanly=themtintuc'); 
    }
    else if(isset($_POST['sua']))
    {
        $sql = "update tintuc set tenTT='$tenTT', tenTT_khongdau='$tenTT_khongdau', idUser='$idUser', ngaydangTT='$ngaydangTT', ngaytuTT='$ngaytuTT', ngaydenTT='$ngaydenTT', motaTT='$motaTT', hinhanhTT='$hinhanhTT' where idTT='$_GET[id]'";  
        mysqli_query($conn,$sql);
        header('location: ../../index.php?quanly=danhsachtintuc'); 
    }
    else
    {
        $sql = "delete from tintuc where idTT='$_GET[id]'";
        mysqli_query($conn,$sql);
        header('location: ../../index.php?quanly=danhsachtintuc'); 
    }
?>