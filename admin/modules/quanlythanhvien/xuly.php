<?php
    include('../../../core/config.php');

    $id = $_GET['id'];

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $cmnd = $_POST['cmnd'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];
    $note = $_POST['note'];

    if(isset($_POST['them']))
    {
        $sql = "insert into taikhoan(username,password,name,cmnd,address,email,phone,level,note) 
                values ('$username','$password','$name','$cmnd','$address','$email','$phone','$level','0')";
        mysqli_query($conn,$sql);
        header('location: ../../index.php?quanly=themthanhvien'); 
    }
    else if(isset($_POST['sua']))
    {
        $select = "select * from taikhoan where idUser='$id'";
        $row = mysqli_fetch_array(mysqli_query($conn,$select),MYSQLI_ASSOC);
        if($row['level']==2)
        {
            echo '<script>alert("Không thể thay đổi người cùng cấp");location.href="../../index.php?quanly=danhsachthanhvien"</script>';
        }
        else
        {	
			if($password==md5('******'))
				$password=$row['password'];
			$sql = "update taikhoan set username='$username', password='$password', name='$name', cmnd='$cmnd', address='$address', email='$email', phone='$phone', level='$level', note='$note' where idUser='$id'";
            mysqli_query($conn,$sql);
            header('location: ../../index.php?quanly=danhsachthanhvien');  
        }
    }
    else
    {
        $sql = "delete from taikhoan where idUser='$id'";
        $select = "select * from taikhoan where idUser='$id'";
        $row = mysqli_fetch_array(mysqli_query($conn,$select),MYSQLI_ASSOC);
        if($row['level']==2)
        {
            echo '<script>alert("Không thể xóa người cùng cấp");location.href="../../index.php?quanly=danhsachthanhvien"</script>';
        }
        else
        {
            mysqli_query($conn,$sql);
            header('location: ../../index.php?quanly=danhsachthanhvien');  
        }
    }
?>