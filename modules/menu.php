<nav>
    <div id="menu" class="container">
        <ul style="padding: 7px 0">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
            <li>
                <a href="index.php">Sản Phẩm</a>
                <ul class="sub-menu">
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
            <li><a href="index.php?act=tintuc">Tin Tức</a></li>
            <li><a href="index.php?act=dichvu">Dịch Vụ</a></li>
            <li><a href="index.php?act=phanhoi">Phản Hồi</a></li>
        </ul> 
    </div>
</nav>