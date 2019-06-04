<div id="header">
    <img src="../media/images/Alogo.png" alt="logo">
    <h1>Cửa Hàng Hoa Tươi Alumbale</h1>
    <div class="fa">
        <a href="index.php?act=logout"><i class="fa fa-sign-out-alt"></i></a>
        <?php
            if(isset($_SESSION['admin']))
                echo    '<a href="#"><i class="fa fa-user"> Hi,'.$_SESSION["admin"]["name"].'</i>
                            <ul class="sub-menu" style="display:none">
                                <li></li>
                                <li></li>
                            </ul>        
                        </a>';
        ?>
    </div>
    <div style="clear:both"></div>
</div>