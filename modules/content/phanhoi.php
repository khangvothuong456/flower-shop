<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh'); // xác định ngày giờ ở Việt Nam;

    if(isset($_POST['send']))
    {
        $date = date('Y-m-d');
        // $idPH; tự dộng tăng;
        // $idUser; xem có phải thành viên không;
        $namePH = $_POST['namePH'];
        $addressPH = $_POST['addressPH'];
        $emailPH = $_POST['emailPH'];
        $phonePH = $_POST['phonePH'];
        $tieudePH = $_POST['tieudePH'];
        $motaPH = $_POST['motaPH'];
        // $statusPH = $_POST['namePH']; luôn mặc định là 0;
        $sql = "select * from taikhoan where address = '$addressPH' AND phone = '$phonePH'";
        $run = mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)>0) // đã tồn tại nghĩa là phản hồi của thành viên;
        {
            $row = mysqli_fetch_assoc($run);
            $idUser = $row['idUser'];
            $sql = "insert into phanhoi(idPH,idUser,namePH,addressPH,phonePH,tieudePH,motaPH,ngayPH,statusPH)
                    values ('','$idUser','$namePH','$addressPH','$phonePH','$tieudePH','$motaPH','$date','0')";
            mysqli_query($conn,$sql);
        }
        else
        {
            $sql = "insert into phanhoi(idPH,idUser,namePH,addressPH,phonePH,tieudePH,motaPH,ngayPH,statusPH)
                    values ('','0','$namePH','$addressPH','$phonePH','$tieudePH','$motaPH','$date','0')";
            mysqli_query($conn,$sql);
        }
    }
?>
<div style="width:100%">
    <div class="title-2">
        <h2>Phản Hồi</h2>
    </div>
    <div style="width:100%;color:blue;border:1px solid rgba(0,0,0,.1);padding:0 15px 0 15px;box-sizing:border-box">
        <h2 style="color:green;text-align:center;font-size:36px;font-weight:bold;margin:12px 0">Phản hồi về Alumbale</h2>
        <p style="font-size:20px;line-height:28px;margin-bottom:15px">
            Để không ngừng nâng cao chất lượng dịch vụ và đáp ứng tốt hơn nữa các yêu cầu của Quý khách,
            chúng tôi mong muốn nhận được các thông tin phản hồi. Nếu Quý khách có bất kỳ thắc mắc hoặc đóng góp nào,
            xin vui lòng liên hệ với chúng tôi theo thông tin dưới đây.
            Chúng tôi sẽ phản hồi lại Quý khách trong thời gian sớm nhất.
        </p>
        <form class="form-horizontal" action="" method="post">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Họ tên</label>  
                    <div class="col-md-6">
                        <input type="text" name="namePH" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['name']:'' ;?>" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="phone">Địa chỉ</label>  
                    <div class="col-md-6">
                        <input type="text" name="addressPH" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['address']:'' ;?>" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="cmnd">Email</label>  
                    <div class="col-md-6">
                        <input type="text" name="emailPH" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['email']:'' ;?>" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="address">Điện thoại</label>  
                    <div class="col-md-6">
                        <input type="text" name="phonePH" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['phone']:'' ;?>" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="email">Tiêu đề</label>  
                    <div class="col-md-6">
                        <input type="text" name="tieudePH" size="" value="" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-md-2 control-label" for="comment">Nội dung:</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="motaPH" id="ckeditor" rows="10"></textarea>
                        <script typy="text/javascript">CKEDITOR.replace("ckeditor")</script>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-2 control-label" for="singlebutton"></label>
                    <div class="col-md-6">
                        <input type="submit" name="send" value="Gửi" name="register-btn" class="btn btn-primary"onclick="return ktraDangky();"/>  
                        <input type="reset" name="reset" value="Hủy" class="btn btn-danger"/>
                    </div>
                </div>
            </fieldset>
        </form>
        <h2 style="color:orange;text-align:center;font-size:28px;font-weight:bold;margin-bottom:10px">Cảm ơn sự quan tâm của quý khách!</h2>
    </div>
</div>