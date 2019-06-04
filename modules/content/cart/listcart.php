<?php
    if(isset($_GET['id']) && isset($_GET['sl']))
    {        
        $sql = "select * from sanpham where idSP='$_GET[id]'";
        $run = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($run,MYSQLI_ASSOC);

        if($_GET['sl']<0)
        {
            $_SESSION["cart"][$_GET["id"]] = array(
                'tenSP'=>$row['tenSP'],
                'hinhanhSP'=>$row['hinhanhSP'],
                'maSP'=>$row['maSP'],
                'giaSP'=>$row['giaSP'],
                'sl'=>$_GET['sl']=1
            );
        }
        else
        {
            $_SESSION["cart"][$_GET["id"]] = array(
                'tenSP'=>$row['tenSP'],
                'hinhanhSP'=>$row['hinhanhSP'],
                'maSP'=>$row['maSP'],
                'giaSP'=>$row['giaSP'],
                'sl'=>$_GET['sl']
            );
        }
    } 
?>
<div style="width:100%">
    <div class="title-2">
        <h2>Giỏ hàng của bạn</h2>
    </div>
    <div style="width:100%;color:#191919;font-size:18px;border:1px solid rgba(0,0,0,.1);padding:0 15px 0 15px;box-sizing:border-box">
        <table class="table table-striped" style="font-size:18px;">
            <thead>
            <tr>
                <th width="5%">STT</th>
                <th width="15%">Hình ảnh</th>
                <th width="40%">Thông tin</th>
                <th width="20%">Thành tiền</th>
                <th width="10%" colspan="2">Thao tác</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    if(!empty($_SESSION['cart']))
                    {
                        $i = 0;
                        foreach($_SESSION['cart'] as $key => $value )
                        {
                            $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><img src="admin/uploads/<?php echo $_SESSION['cart'][$key]['hinhanhSP']; ?>" alt="" style="width:100%"></td>
                    <td>
                        <span style="color:red">Tên: <?php echo $_SESSION['cart'][$key]['tenSP']; ?></span><br>
                        <span style="color:green">Mã: <?php echo $_SESSION['cart'][$key]['maSP']; ?></span><br>
                        <span style="color:blue">Giá x Số lượng: <?php echo number_format($_SESSION['cart'][$key]['giaSP'],0,",","."); ?></span> x <input type="text" name="sl_<?php echo $key ?>" id="sl_<?php echo $key ?>" value="<?php echo $_SESSION['cart'][$key]['sl']; ?>" style="width:40px;font-size:16px;text-align:right;padding:0 4px ">
                    </td>
                    <td>
                        <?php
                            $thanhtien = $_SESSION['cart'][$key]['giaSP']*$_SESSION['cart'][$key]['sl'];
                            echo number_format($thanhtien,0,",",".");
                        ?>
                    </td>
                    <td><a href="javascript:void(0)" onclick="updateItem(<?php echo $key ?>)" ><i class="fas fa-check" style="color:blue"></i></a></td>
                    <td><?php echo "<a href='?act=removecart&key=$key' onclick= \" return confirm('Bạn muốn xóa sản phẩm này?') \" ><i class='fas fa-trash-alt' style='color:blue'></i></a>" ?></td>
                </tr>
                <?php
                        }    
                    }
                ?>
            </tbody>
        </table>
        <script type="text/javascript">
            function updateItem(id)
            {
                sl = $("#sl_"+id).val();
                $.get("index.php?act=listcart&id="+id+"&sl="+sl,function(data){
                    location.reload();
                });
            }
        </script>
        <div style="width:100%;padding-right:15px;margin:15px;box-sizing:border-box">
            <a href="?act=removecart&key=<?php echo 'all' ?>" style="display:block;float:left;text-decoration:none;color:#191919;font-size:18px;padding:8px 12px;border:1px solid">Xóa giỏ hàng</a>
            <div style="float:right;width:30%;text-align:left;color:red;font-size:18px;font-weight:bold;padding:8px 12px;border:1px solid blue;box-sizing:border-box">
                <span style="width:100%;color:red;font-size:18px;font-weight:bold;border:0;background:none">
                    <form name="giohang">
                        <input type="text" name="tongtien" style="height:24px;color:red;font-size:20px;background:none;outline:none;border:none;padding:0 8px;" 
                            value="<?php
                                echo "Tổng: ";
                                $total=0; 
                                if(isset($_SESSION['cart']))
                                {
                                    foreach($_SESSION['cart'] as $key => $value)
                                    {
                                        $total += ($_SESSION['cart'][$key]['sl']*$_SESSION['cart'][$key]['giaSP']);
                                    }
                                    echo number_format($total,0,",","")." VNĐ";
                                }
                                else
                                {
                                    echo '0 VNĐ';
                                }
                            ?>"
                        readonly/>
                    </form>
                </span>
            </div>   
            <div class="clear"></div>
        </div>        
        <div style="width:100%;text-align:right;padding-right:15px;margin:15px;box-sizing:border-box">
            <a href="index.php?act=thanhtoan" id="pay-btn" style="text-decoration:none;color:blue;font-size:18px;font-weight:bold;border:1px solid blue;padding:8px 12px;cursor:pointer" onclick="return thanhtoangiohang();"><i class="far fa-credit-card" style="margin:0 8px 0 0"></i>Thanh Toán</a>
        </div>
    </div>
</div>