<div id="wrapper-dashboard">
    <div class="flex-card">
        <div class="wrapper-card">
            <div class="top-card" style="background:rgba(148,0,211,0.5)">
                <div style="float:left;width:60%">
                    <i i class="fas fa-list" style="color:white;font-size:72px"></i>
                </div>
                <div style="float:left;width:40%;text-align:right">
                    <span style="widht:100%;text-align:right;font-size:48px">
                        <?php 
                            $sql = "select * from loaisanpham";
                            $run = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($run); 
                            echo $row;
                        ?>
                    </span><br/>
                    <span style="widht:100%;text-align:center;font-size:18px">Danh mục</span>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="bottom-card">
                <span>Xem chi tiết</span>
                <a href="index.php?quanly=danhsachdanhmuc"><i class="fas fa-arrow-alt-circle-right" style="float:right"></i></a>
            </div>
        </div>
        <div class="wrapper-card">
            <div class="top-card" style="background:#d9534f">
                <div style="float:left;width:60%">
                    <i class="fas fa-shopping-cart" style="color:white;font-size:72px"></i>
                </div>
                <div style="float:left;width:40%;text-align:right">
                    <span style="widht:100%;text-align:right;font-size:48px">
                        <?php 
                            $sql = "select * from sanpham";
                            $run = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($run); 
                            echo $row;
                        ?>
                    </span><br/>
                    <span style="widht:100%;text-align:center;font-size:18px">Sản phẩm</span>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="bottom-card">
                <span>Xem chi tiết</span>
                <a href="index.php?quanly=danhsachsanpham"><i class="fas fa-arrow-alt-circle-right" style="float:right"></i></a>
            </div>
        </div>
        <div class="wrapper-card">
            <div class="top-card" style="background:#f0ad4e">
                <div style="float:left;width:60%">
                    <i class="fas fa-users" style="color:white;font-size:72px"></i>
                </div>
                <div style="float:left;width:40%;text-align:right">
                    <span style="widht:100%;text-align:right;font-size:48px">
                        <?php 
                            $sql = "select * from taikhoan";
                            $run = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($run); 
                            echo $row;
                        ?>
                    </span><br/>
                    <span style="widht:100%;text-align:center;font-size:18px">Thành viên</span>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="bottom-card">
                <span>Xem chi tiết</span>
                <a href="index.php?quanly=danhsachthanhvien"><i class="fas fa-arrow-alt-circle-right" style="float:right"></i></a>
            </div>
        </div>
    </div>

    <div class="flex-card">
        <div class="wrapper-card">
            <div class="top-card" style="background:#f0db4e">
                <div style="float:left;width:60%">
                    <i i class="far fa-newspaper" style="color:white;font-size:72px"></i>
                </div>
                <div style="float:left;width:40%;text-align:right">
                    <span style="widht:100%;text-align:right;font-size:48px">
                        <?php 
                            $sql = "select * from tintuc";
                            $run = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($run); 
                            echo $row;
                        ?>
                    </span><br/>
                    <span style="widht:100%;text-align:center;font-size:18px">Tin tức</span>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="bottom-card">
                <span>Xem chi tiết</span>
                <a href="index.php?quanly=danhsachtintuc"><i class="fas fa-arrow-alt-circle-right" style="float:right"></i></a>
            </div>
        </div>
        <div class="wrapper-card">
            <div class="top-card" style="background:#5cb85c">
                <div style="float:left;width:60%">
                    <i class="fas fa-shipping-fast" style="color:white;font-size:72px"></i>
                </div>
                <div style="float:left;width:40%;text-align:right">
                    <span style="widht:100%;text-align:right;font-size:48px">
                        <?php 
                            $sql = "select * from donhang";
                            $run = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($run); 
                            echo $row;
                        ?>
                    </span><br/>
                    <span style="widht:100%;text-align:center;font-size:18px">Đơn hàng</span>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="bottom-card">
                <span>Xem chi tiết</span>
                <a href="index.php?quanly=danhsachdonhang"><i class="fas fa-arrow-alt-circle-right" style="float:right"></i></a>
            </div>
        </div>
        <div class="wrapper-card">
            <div class="top-card" style="background:#0090dd">
                <div style="float:left;width:60%">
                    <i class="far fa-comments" style="color:white;font-size:72px"></i>
                </div>
                <div style="float:left;width:40%;text-align:right">
                    <span style="widht:100%;text-align:right;font-size:48px">
                        <?php 
                            $sql = "select * from phanhoi";
                            $run = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($run); 
                            echo $row;
                        ?>
                    </span><br/>
                    <span style="widht:100%;text-align:center;font-size:18px">Phản hồi</span>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="bottom-card">
                <span>Xem chi tiết</span>
                <a href="index.php?quanly=danhsachphanhoi"><i class="fas fa-arrow-alt-circle-right" style="float:right"></i></a>
            </div>
        </div>
    </div>
</div>