<?php
    include('core/config.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="vi-en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoa Tươi Alumbale</title>
    <script type="text/javascript" src="library/ckeditor/ckeditor.js">CKEDITOR.replace('ckeditor')</script>
    <link rel="stylesheet" href="library/fontawesome/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="library/css/bootstrap.css">
    <link rel="stylesheet" href="library/css/style.css" type="text/css">
    <script src="library/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="library/js/bootstrap.js"></script>
    <script src="library/js/javascript.js" type="text/javascript"></script>
</head>
<body>
    <div class="container-fluid">
        <?php
            include('modules/header.php');
            include('modules/menu.php');
            include('modules/slideShow.php');
            include('modules/body.php');
            include('modules/footer.php');
        ?>
    </div>
</body>
</html>