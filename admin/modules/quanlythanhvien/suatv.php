<?php
    include('../core/config.php');
    $sql = "select * from taikhoan where idUser='$_GET[id]'";
    $run = mysqli_query($conn,$sql);
    $dong = mysqli_fetch_array($run,MYSQLI_ASSOC);
?>
<div class="form-wrapper">
    <form action="modules/quanlythanhvien/xuly.php?id=<?php echo $dong['idUser']?>" method="post" enctype="multipart/form-data">
        <h2>Sửa Thành Viên</h2>
        <table style="width:100%" cellspacing="10">
        <tr>
            <td>Tên tài khoản</td>
            <td><input type="text" name="username" value="<?php echo $dong['username']?>" /></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name="password" value="******" /></td>
        </tr>
        <tr>
            <td>Tên</td>
            <td><input type="text" name="name" value="<?php echo $dong['name']?>" /></td>
        </tr>
        <tr>
            <td>Chứng minh nhân dân</td>
            <td><input type="text" name="cmnd" value="<?php echo $dong['cmnd']?>" /></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="address" value="<?php echo $dong['address']?>" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $dong['email']?>" /></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="text" name="phone" value="<?php echo $dong['phone']?>" /></td>
        </tr>
        <?php
            if($_GET['level']!=2)
            echo '<tr>
                <td>Loại tài khoản</td>
                <td>
                    <select id="level" name="level">
                        <option value="0" >Khách hàng</option>
                        <option value="1" >Nhân viên</option>
                    </select>
                </td>
            </tr>';
		?>
        <tr>
            <td>Ghi Chú</td>
            <td>
                <select name="note" id="note">
                    <?php
                        $sql2 = "select * from taikhoan";
                        $run2 = mysqli_query($conn,$sql2);
                        while($dong2=mysqli_fetch_array($run2,MYSQLI_ASSOC))
                        {
                            $selected2 = "";
                            if($dong2['note'] == $dong['note'])
                            {
                                $selected2 = "selected";
                            }
                        }
                    ?>
                    <option <?php echo isset($selected2)?$selected2:'' ;?> value="0">Hoạt động</option>
                    <option <?php echo isset($selected2)?$selected2:'' ;?> value="1">Khóa tạm thời</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div align="center"><button name="sua" style="color:#fff;font-size:22px;font-weight:bold;background:#9400d3;padding:8px 12px;border-radius:6px;outline:none">Sửa</button></div> 
            </td>
        </tr>
        </table>
    </form>
</div>