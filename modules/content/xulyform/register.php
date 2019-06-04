<?php
    include('../../../core/config.php');
    if(isset($_POST['register-btn']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $cmnd = $_POST['cmnd'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password1 = md5($_POST['pass1']);
        $password2 = md5($_POST['pass2']);
        
        $sql = "insert into taikhoan(idUser,username,password,name,cmnd,address,email,phone,level,note) 
                values ('','$username','$password1','$name','$cmnd','$address','$email','$phone','0','0')";
        
        if(mysqli_num_rows(mysqli_query($conn,"select username from taikhoan where username = '$username'")) ==0)
        {
            mysqli_query($conn,$sql);
            echo '<script>alert("Bạn đăng ký thành công!");window.location="../../../index.php"</script>';                
        }
        else
            echo '<script>alert("Bạn đăng ký thất bại!");window.location="../../../index.php"</script>';  
    }
?>