<div style="width:100%">
    <div class="title-2">
        <h2>Thanh Toán</h2>
    </div>
    <div style="color:#191919;border:1px solid rgba(0,0,0,.1);padding:0 15px 0 15px">
        <div style="line-height:22px;margin:8px 0">
            <p>- Nếu có tài khoản hãy đăng nhập để thanh toán.</p>
            <p>- Nếu không có, bạn hãy điền đầy đủ thông tin vào mẫu bên dưới để tiến hành thanh toán hoặc đăng ký để trở thành thành viên của Shop.</p>
        </div>
        <form class="form-horizontal" action="modules/content/xulyform/payment.php" method="post" name="thanhtoan">
            <fieldset>
                <div style="color:red;font-size:24px">Thông tin cá nhân</div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="">Họ và Tên</label>  
                    <div class="col-md-4">
                        <input type="text" name="name" class="form-control input-md" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['name']:'' ;?>" />
                        <span id="name"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="">Số điện thoại</label>  
                    <div class="col-md-4">
                        <input type="text" name="phone" class="form-control input-md" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['phone']:'' ;?>" />
                        <span id="phone"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="">Địa chỉ</label>  
                    <div class="col-md-4">
                        <input type="text" name="address" class="form-control input-md" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['address']:'' ;?>" />
                        <span id="address"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="">Email</label>  
                    <div class="col-md-4">
                        <input type="text" name="email" class="form-control input-md" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['email']:'' ;?>" />
                        <span id="email"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="">Hóa đơn</label>  
                    <div class="col-md-4">
                        <input type="text" name="total" class="form-control input-md" style="color:red;font-size:22px" value="<?php 
                            $total=0; 
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $total += ($_SESSION['cart'][$key]['sl']*$_SESSION['cart'][$key]['giaSP']);
                            }
                            echo number_format($total,0,",","")." VNĐ";
                        ?>"
                        readonly />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <input type="submit" name="thanhtoan" value="Thanh Toán" class="btn btn-success" onclick="return ktraThanhToan();"/>  
                        <a href="index.php?act=listcart" class="btn btn-primary">Quay về giỏ hàng</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<div class="clear"></div>
