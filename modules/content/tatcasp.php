<?php
    echo '<div class="title-2">';
    echo    '<h2>Sản Phẩm Mới Nhất</h2>';
    echo '</div>';
    echo '<div class="row">';
    $sql = "select * from sanpham order by idSP desc";
    $run = mysqli_query($conn,$sql); 
    $i = 0;
    while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC))
    {
        if($i<9)
        {
            echo "
                    <div class='col-xs-12 col-sm-6 col-md-4'>
                        <div class='box'>
                            <div class='box-img'>
                                <a href='index.php?act=chitietsanpham&item=$dong[idSP]'><img src='admin/uploads/$dong[hinhanhSP]' alt=''></a>
                            </div>
                            <div class='box-content'>
                                <div style='width:100%;height:40px;background:#95819d;line-height:40px;text-align:center'>
                                    <h3>$dong[tenSP]</h3>
                                </div>
                                <div style='width:100%;height:40px;line-height:40px;text-align:center'>
                                    <p>".number_format($dong['giaSP'],0,',','.')." VNĐ</p>
                                </div>
                                <div style='width:100%;padding:10px 0 20px 0'>
                                    <div style='display:block;text-align:center'>
                                        <a href='index.php?act=chitietsanpham&item=$dong[idSP]' class='see-details-btn'>Xem chi tiết</a><a href='index.php?act=addcart&item=$dong[idSP]' class='add-cart-btn'><i class='fa fa-cart-plus'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $i++;
    }
    echo " </div>";
?>