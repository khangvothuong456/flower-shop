<div class="container" style="margin-bottom:15px;">
    <div class="row">
        <div id="left" class="col-xs-12 col-md-3" style="padding-left:0">
            <div id="categories">
                <div class="title-1">
                    <h2>Danh Mục</h2>
                </div>
                <ul class="list-group">
                    <?php
                        $sql = "select * from loaisanpham";
                        $run = mysqli_query($conn,$sql);
                        while($rows=mysqli_fetch_array($run,MYSQLI_ASSOC))
                        {
                            echo "<li class='list-group-item'><a href='index.php?act=loaisanpham&id=$rows[idCL]'>".$rows['tenCL']."</a></li>";
                        }
                    ?>
                </ul>
            </div>
            <div style="width:100%;color:#fff;font-size:18px">
                <div style="width:100%;background:rgba(149,129,157,1);border:1px solid rgba(0,0,0,.1);padding:8px 12px;box-sizing:border-box;margin-top:15px;font-weight:bold;font-size:16px">TẠI SAO CHỌN CHÚNG TÔI</div>
                <div style="width:100%;background:rgba(149,129,157,0.85);padding:6px 20px;box-sizing:border-box">Dịch vụ chuyên nghiệp và uy tín nhất.</div>
                <div style="width:100%;background:rgba(149,129,157,0.7);padding:6px 20px;box-sizing:border-box">Đặt hàng, thanh toán đơn giản.</div>
                <div style="width:100%;background:rgba(149,129,157,0.55);padding:6px 20px;box-sizing:border-box">Giá cả phụ hợp nhất.</div>
            </div>
            <div class="clear"></div>
            <div style="margin-top:20px">
                <a href="#"><img src="media/images/advertisement.png" alt="" width="100%"></a>
            </div>   
        </div>
        <div id="right" class="col-xs-12 col-md-9" style="padding:0">
            <?php 
                if(isset($_GET['act']))
                {
                    $tam = $_GET['act'];
                }    
                else
                    $tam = '';
                switch($tam)
                {
                    case 'gioithieu': include('modules/content/gioithieu.php'); break;
                    case 'tintuc': include('modules/content/tintuc.php'); break;
                    case 'phanhoi': include('modules/content/phanhoi.php'); break;
                    case 'dichvu': include('modules/content/dichvu.php'); break;
                    case 'loaisanpham': include('modules/content/loaisanpham.php'); break;
                    case 'chitietsanpham': include('modules/content/chitietsanpham.php'); break;
                    case 'dangnhap': include('modules/content/dangnhap.php'); break;
                    case 'dangky': include('modules/content/dangky.php'); break;
                    case 'tintuc': include('modules/content/tintuc.php'); break;
                    //case 'chitiettintuc': include('modules/content/chitiettintuc.php'); break;
                    case 'addcart': include('modules/content/cart/addcart.php'); break;
                    case 'removecart': include('modules/content/cart/removecart.php'); break;
                    case 'listcart': include('modules/content/cart/listcart.php'); break;
                    case 'myaccount': include('modules/content/myaccount.php'); break;
                    case 'thanhtoan': include('modules/content/thanhtoan.php'); break;
                    case 'timkiem': include('modules/content/timkiem.php'); break;
                    //case 'timkiemnangcao': include('modules/content/ajax/timkiemnangcao.php'); break;
                    default: include('modules/content/tatcasp.php'); break;
                }
            ?>  
        </div>
    </div>
</div>