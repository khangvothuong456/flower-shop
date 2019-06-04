<script>
    $(document).ready(function(){
        $("#username").blur(function(){
            var username = $(this).val();
            $.post("modules/content/ajax/ajax-register.php",{username:username},function(data){
                $("#user").html(data);
            });
        });
    });
</script>
<div style="width:100%">
	<div class="title-2">
    	<h2>Đăng kí thông tin</h2>
	</div>
    <div style="border:1px solid rgba(0,0,0,.1);padding:15px">
        <form class="form-horizontal" action="modules/content/xulyform/register.php" method="post" name="dangky">
            <fieldset>
                <div style="font-size:24px">Thông tin cá nhân</div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Họ và Tên</label>  
                    <div class="col-md-4">
                        <input id="" name="name" type="text" class="form-control input-md" required="">
                        <span id="name"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="phone">Số điện thoại</label>  
                    <div class="col-md-4">
                        <input id="" name="phone" type="text" class="form-control input-md" required="">
                        <span id="phone"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cmnd">Chứng minh nhân dân</label>  
                    <div class="col-md-4">
                        <input id="" name="cmnd" type="text" class="form-control input-md" required="">
                        <span id="cmnd"></span> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="address">Địa chỉ</label>  
                    <div class="col-md-4">
                        <input id="" name="address" type="text" class="form-control input-md" required="">
                        <span id="address"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-mail</label>  
                    <div class="col-md-4">
                        <input id="" name="email" type="text" class="form-control input-md" required="">
                        <span id="email"></span>
                    </div>
                </div>
                <div style="font-size:24px">Thông tin cá nhân</div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="username">Tài khoản</label>
                    <div class="col-md-4">
                        <input id="username" name="username" type="text" class="form-control input-md" required="">
                        <span id="user"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pass1">Mật khẩu</label>
                    <div class="col-md-4">
                        <input id="" name="pass1" type="password" class="form-control input-md" required="">
                        <span id="pass1"></span>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pass2">Nhập mật khẩu</label>
                    <div class="col-md-4">
                        <input id="" name="pass2" type="password" class="form-control input-md" required="">    
                        <span id="pass2"></span>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <input type="submit" value="Đăng ký" name="register-btn" class="btn btn-primary"onclick="return ktraDangky();"/>  
                        <input type="reset" value="Làm lại" class="btn btn-primary"/>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>