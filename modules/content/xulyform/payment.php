<?php
    include('../../../core/config.php');
    session_start();
    if(isset($_POST['thanhtoan']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $idUser = isset($_SESSION['user'])?$_SESSION['user']['idUser']:0;
        $tongtienDH = $_POST['total'];
        $sql = "insert into donhang(idUser,nameDH,phoneDH,addressDH,emailDH,tongtienDH,ngayDH,statusDH)
                values('$idUser','$name','$phone','$address','$email','".@number_format($tongtienDH,0,"","")."','".date('Y-m-d')."','1')";
        mysqli_query($conn,$sql);
        $last_id = mysqli_insert_id($conn);
        foreach($_SESSION['cart'] as $key => $value)
        {
            $sql = "insert into chitietdonhang(idDH,idSP,giaSP,soluongDH)
                    values('$last_id','$key','".$_SESSION['cart'][$key]['giaSP']."','".$_SESSION['cart'][$key]['sl']."')";
            mysqli_query($conn,$sql);
        }
    }
    echo '<script>alert("Thanh toán thành công!");window.location="../../../index.php"</script>';
?>