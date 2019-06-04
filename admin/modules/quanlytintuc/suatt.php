<?php
    include('../core/config.php');
    $sql = "select * from tintuc where idTT='$_GET[id]'";
    $dong = mysqli_fetch_array(mysqli_query($conn,$sql),MYSQLI_ASSOC);
?>
<div class="form-wrapper">
    <form action="modules/quanlytintuc/xuly.php?id=<?php echo $dong['idTT']?>" method="post" enctype="multipart/form-data">
        <h2>Sửa Tin Tức</h2>
        <table style="width: 100%; font-size: 18px;" cellspacing="10">
        <tr>
            <td>Tên tiêu đề</td>
            <td><input type="text" name="tenTT" value="<?php echo $dong['tenTT']?>"/></td>
        </tr>
        <tr>
            <td>Tên tiêu đề (không dấu)</td>
            <td><input type="text" name="tenTT_kd" value="<?php echo $dong['tenTT_kd'] ?>" /></td>
        </tr>
        <tr>
            <td>Đăng bởi</td>
            <td>
                <select name="idUser">
                    <?php 
                        $sql="select * from taikhoan where level='1'";
                        $run=mysqli_query($conn,$sql);
                        while($rows=mysqli_fetch_array($run,MYSQLI_ASSOC))
                        {
                    ?>
                    <option value="<?php echo $dong['idUser']?>"><?php echo $rows['name']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>	
        <tr>
            <td>Ngày đăng</td>
            <td><input type="date" name="ngaydangTT" style="width:30%;padding:4px 12px;box-sizing:border-box;border:1px solid rgb(180,180,180);border-radius:6px;outline:none;font-size:18px;color:rgba(40,40,40,0.75)"/></td>
        </tr>	
        <tr>
            <td>Mô tả</td>
            <td><textarea name="motaTT" id="ckeditor3" rows="10" style="font-size:16px;"><?php echo $dong['motaTT']?></textarea></td>
            <script typy="text/javascript">CKEDITOR.replace("ckeditor3")</script>
        </tr>
        <tr>
            <td>Áp dụng từ</td>
            <td><input name="ngaytuTT" type="date" style="width:30%;padding:4px 12px;box-sizing:border-box;border:1px solid rgb(180,180,180);border-radius:6px;outline:none;font-size:18px;color:rgba(40,40,40,0.75)"/></td>
        </tr>
        <tr>
            <td>Áp dụng đến</td>
            <td><input name="ngaydenTT" type="date" style="width:30%;padding:4px 12px;box-sizing:border-box;border:1px solid rgb(180,180,180);border-radius:6px;outline:none;font-size:18px;color:rgba(40,40,40,0.75)"/></td>
        </tr>        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanhTT"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <div align="center">
                    <?php echo "<button onclick= \" return confirm('Bạn thật sự muốn sửa tin tin này sao?') \" name='sua' style='color:#fff;font-size:22px;font-weight:bold;background:#9400d3;padding:8px 12px;border-radius:6px;outline:none'>Sửa</button>"?>
                </div> 
            </td>
        </tr>
        </table>
    </form>
</div>
