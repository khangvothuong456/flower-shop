<?php
    if(isset($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);
        $sql = "select * from taikhoan where username='$user' AND password='$pass'";
        $run = mysqli_query($conn,$sql);        
        if(mysqli_num_rows($run)==1)
        {
            $row = mysqli_fetch_array($run);
            if($row['level']!=0)
            {
                unset($_SESSION['cart']);
                $admin = $_SESSION['admin'];
                $admin = array(
                    'idUser'=>$row['idUser'],
                    'username'=>$row['username'],
                    'password'=>$row['password'],
                    'name'=>$row['name'],
                    'cmnd'=>$row['cmnd'],
                    'address'=>$row['address'],
                    'email'=>$row['email'],
                    'phone'=>$row['phone'],
                    'level'=>$row['level'],
                    'note'=>$row['note']
                );
                $_SESSION['admin'] = $admin;
                header('location: admin/index.php');
            }
            else
            {
                unset($_SESSION['cart']);
                $user = $_SESSION['user'];
                $user = array(
                    'idUser'=>$row['idUser'],
                    'username'=>$row['username'],
                    'password'=>$row['password'],
                    'name'=>$row['name'],
                    'cmnd'=>$row['cmnd'],
                    'address'=>$row['address'],
                    'email'=>$row['email'],
                    'phone'=>$row['phone'],
                    'level'=>$row['level'],
                    'note'=>$row['note']
                );
                $_SESSION['user'] = $user;
                header('location: index.php');
            }
        }
        else
        {
            echo '<script>alert("Sai tài khoản hoặc mật khẩu.");location.href="index.php"</script>';
        }
    }
?>
<?php
    if(isset($_GET['act']))
    {
        $temp = $_GET['act'];
        if($temp=='logout')
        {
            session_destroy();
            header('location: index.php');    
        }
    }   
?>
<header>
    <div id="header-top">
        <div class="container">
            <ul>
                <?php
                    if(isset($_SESSION['user']))
                    {
                        if($_SESSION['user']['note']=='0')
                        {
                            echo '<li><a href="index.php?act=logout">• Đăng xuất</a></li>';
                            echo "<li><a href='#'>• Hi, ".$_SESSION['user']['name']."</a></li>";
                        }
                        else
                        {
                            echo '<script>alert("Tài khoản của bạn bị khóa.")</script>';
                            echo '<li><a href="index.php?act=dangky">• Đăng ký</a></li>';
                            echo '<li><a href="#" id="dangnhap">• Đăng nhập</a></li>';   
                        }
                    }
                    else
                    {
                        echo '<li><a href="index.php?act=dangky">• Đăng ký</a></li>';
                        echo '<li><a href="#" id="dangnhap">• Đăng nhập</a></li>';    
                    }
                ?>
                <li><a href="index.php?act=listcart">• Giỏ hàng</a></li>
                <li><a href="index.php?act=myaccount">• Tài khoản của tôi</a></li>
            </ul>
        </div>
    </div>
    <div id="header-divided"></div>
    <form action="" method="post">
        <div class="loginBox" style="display:none">
            <span><i class="fa fa-times" style="color:#262626;"></i></span>
            <img src="media/images/Alogo.png" class="logoLogin"/>
            <h3>Đăng nhập tại đây</h3>
            <form action="" method="" class="inputLoginBox">
                <div style="position:relative">
                    <input type="text" name="user" value="" placeholder="Tài khoản của bạn" />
                    <span><i class="fa fa-user" id="fa-user-loginBox" aria-hidden="true"></i></span>		
                </div>
                <div style="position:relative">
                    <input type="password" name="pass" value="" placeholder="Mật khẩu của bạn" />
                    <span><i class="fa fa-lock" id="fa-lock-loginBox" aria-hidden="true"></i></span>		
                </div>
                <input type="submit" name="login" value="Đăng nhập" />
            </form>
            <div align="center">
                <a href="#">Quên mật khẩu?</a> 
                <a href="index.php?act=dangky">Đăng ký</a>
            </div>
        </div>    
    </form>
    <div id="header-bottom">
        <div class="container">
            <div class="row" style="margin:15px 0 ">
                <div class="col-md-4" style="padding:0">
                    <div class="search-group">
                        <form action="" method="get">
                            <input type="text" name="searchtext" value=""><button type="submit" name="act" value="timkiem"><i class="fa fa-search"></i></button>        
                        </form>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="media/images/logo.png" alt="logo">
                </div>
                <div class="col-md-4" style="padding:0">
                    <div class="cart-group">
                        <a href="index.php?act=listcart"><i class="fa fa-cart-plus"></i></a>
                        <a href="index.php?act=listcart" class="my-cart">
                            Giỏ hàng: 
                            <span class="item">
                                <?php 
                                    $total = 0;
                                    if(isset($_SESSION['cart']))
                                    {
                                        foreach($_SESSION['cart'] as $key => $value)
                                        {
                                            $total += $_SESSION['cart'][$key]['sl'];
                                        }
                                        echo $total;    
                                    }
                                    else
                                        echo "0";
                                ?> 
                            sản phẩm
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" style="margin-right:5px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php" style="padding:0 5px">
                <img src="media/images/Alogo.png" alt="" style="height:50px;width:auto;margin-left:15px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                            $sql = "select * from loaisanpham";
                            $run = mysqli_query($conn,$sql);
                            while($rows=mysqli_fetch_array($run,MYSQLI_ASSOC))
                            {
                                echo "<li><a href='index.php?act=loaisanpham&id=$rows[idCL]'>".$rows['tenCL']."</a></li>";
                            }
                        ?>
                    </ul>
                </li>
                <li><a href="index.php?act=tintuc">Tin tức</a></li>
                <li><a href="index.php?act=dichvu">Dịch vụ</a></li>
                <li><a href="index.php?act=phanhoi">Phản hồi</a></li>
                <li>
                    <div class="col-xs-12 col-sm-12 col-md-6" style="">
                        <ul class="nav navbar-nav navbar-right" style="margin-left:0;padding:0 15px">
                            <li>
                                <form action="" method="get" class="navbar-form search-group" role="search">
                                    <div class="input-group">
                                        <input class="form-control"  type="text" name ="search-text" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit" name="act" value="timkiem"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?act=listcart">• Giỏ hàng</a></li>
                <?php
                    if(isset($_SESSION['user']))
                    {
                        echo "<li><a href='index.php?act=myaccount'>• Hi, ".$_SESSION['user']['name']."</a></li>";
                        echo '<li><a href="index.php?act=logout">• Đăng xuất</a></li>';
                    }
                    else
                    {
                        echo '<li><a href="index.php?act=dangnhap">• Đăng nhập</a></li>';
                        echo '<li><a href="index.php?act=dangky">• Đăng ký</a></li>';    
                    }
                ?>
            </ul> 
        </div>
    </div>
</nav>