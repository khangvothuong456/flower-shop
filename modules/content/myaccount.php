<div style="width:100%">
    <div class="title-2">
        <h2>Tài Khoản Của Tôi</h2>
    </div>
    <div style="color:#000;border:1px solid rgba(0,0,0,.1);padding:0 15px 0 15px">
    <?php
        if(isset($_SESSION['user']))
        {
            echo "<table style='width:100%;font-size:18px;margin:10px 0'>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Họ tên</td><td>".$_SESSION['user']['name']."</td></tr>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Tài khoản</td><td>".$_SESSION['user']['username']."</td></tr>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Mật khẩu</td><td>************</td></tr>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Email</td><td>".$_SESSION['user']['email']."</td></tr>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Chứng minh</td><td>".$_SESSION['user']['cmnd']."</td></tr>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Địa chỉ</td><td>".$_SESSION['user']['address']."</td></tr>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Số điện thoại</td><td>".$_SESSION['user']['phone']."</td></tr>
                    <tr height='36px'><td style='width:30%;font-size:20px;font-weight:bold'>Chức vụ</td><td>Thành viên</td></tr>
                    <tr height='36px'>
                        <td colspan='2' class='text-center' style='width:30%;font-size:20px;font-weight:bold'>
                            <input type='button' name='editInfo' value='Chình sửa thông tin' name='register-btn' class='btn btn-primary' />
                            <input type='button' name='editInfo' value='Thay đổi mật khẩu' name='register-btn' class='btn btn-danger' />        
                        </td>
                    </tr>
                </table>";
        }
        else
            echo "<div style='color:red;font-size:22px;text-align:center;margin:12px 0'>Bạn chưa đăng nhập tài khoản !</div>";
    ?>
    </div>
</div>
