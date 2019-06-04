<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../library/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../library/js/javascript.js" type="text/javascript"></script>
    <script type="text/javascript" src="../library/ckeditor/ckeditor.js">CKEDITOR.replace('ckeditor')</script>
    <link rel="stylesheet" href="../library/fontawesome/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Trang quản trị shop Hoa tươi Alumbale</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['admin']))
            header('location: ../index.php');
        if(isset($_GET['act']))
        {
            $temp = $_GET['act'];
            if($temp=='logout')
            {
                session_destroy();
                header('location: ../index.php');    
            }
        }
    ?>
    <div width="100%">
        <?php
            include('../core/config.php');
            include('modules/header.php');
            require('modules/menu.php');
            require('modules/content.php');
        ?>
    </div>
</body>
</html>