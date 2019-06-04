<?php
	$item = $_GET['item'];
	$sql = "select * from sanpham where idSP='$item'";
	$run = mysqli_query($conn,$sql);
	$dong = mysqli_fetch_array($run,MYSQLI_ASSOC);
?>
<div class="title-2">
    <h2>Chi tiết Sản Phẩm</h2>
</div>
<div class="row row-chitietsanpham">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left:0">
        <img src="admin/uploads/<?php echo $dong['hinhanhSP']?>" style="width:100%;border:1px solid;padding:5px;margin-top:10px">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="padding-left:0;padding-right:0;">
        <h2 style="color:green;font-size:36px;margin-left:0;margin-bottom:0">
            <?php echo $dong['tenSP'] ?>
        </h2>
        <h2 style="color:#212121;font-size:24px;margin:0;">
            Mã sản phẩm: <?php echo $dong['maSP'] ?>
        </h2>
        <h2 style="color:#212121;font-size:24px;margin:0;">
            Giá:<span style="font-size:22px;color:#F00;font-style:italic"> <?php echo number_format($dong['giaSP'],0,",",".").' VNĐ' ?></span>
        </h2>
        <h2 style="color:#212121;font-size:24px;margin:0;">Mô tả:</h2>
        <div style="color:#191919;font-size:18px"><?php echo $dong['motaSP'] ?></div>
        <p style="font-size:18px;line-height:24px;color:#191919">
            - Sản phẩm <span style="color:green;font-size:20px;font-weight:bold"><?php echo $dong['tenSP'] ?></span> hiện đang được Hoa tươi Alumbale cung cấp trực tuyến qua website: www.hoatuoialumbale.com Hoặc qua Hotline: 0908 8888 888.
        </p>
        <div style="margin-top:15px" class="sell-btn">
            <a href="?act=addcart&item=<?php echo $dong['idSP']?>" style="display:block;float:left;width:40px;height:34x;background:#95819d;color:white;font-size:20px;text-align:center;padding:8px 0;border-radius:8px 0 0 8px;margin-left:150px"><i class="fa fa-cart-plus"></i></a>
            <a href="?act=addcart&item=<?php echo $dong['idSP']?>" style="display:block;float:left;height:34x;background:#95819d;text-decoration:none;color:white;font-size:20px;font-weight:bold;text-align:center;padding:8px 12px 8px 8px;border-radius:0 8px 8px 0;box-sizing:border-box;">Mua Hàng</a></div>
        </div>  
    </div>
</div>
<!-------------------- mình sử dụng jquery để làm nút mua hàng thay cho css để khổi đặt tên tốn nơtron -------------------->