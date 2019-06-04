<?php
    include('../core/config.php');
    $sql = "select * from sanpham where idSP='$_GET[id]'";
    $run = mysqli_query($conn,$sql);
    $dong = mysqli_fetch_array($run,MYSQLI_ASSOC);
?>
<div class="form-wrapper">
    <form action="modules/quanlysanpham/xuly.php?id=<?php echo $dong['idSP'] ?>" method="post" enctype="multipart/form-data">
        <h2>Sửa Sản Phẩm</h2>
        <table style="width:100%" cellspacing="10">
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" name="maSP" value="<?php echo $dong['maSP'] ?>" /></td>
            </tr>
            <tr>
                <td>Tên sản phâm</td>
                <td><input type="text" name="tenSP" value="<?php echo $dong['tenSP'] ?>" /></td>
            </tr>
            <tr>
                <td>Tên sản phẩm(không dấu)</td>
                <td><input type="text" name="tenSP_kd" value="<?php echo $dong['tenSP_kd'] ?>" /></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input type="text" name="giaSP" value="<?php echo $dong['giaSP'] ?>" /></td>
            </tr>
            <tr>
                <td>Mô tả sản phẩm</td>
                <td><textarea name="motaSP" id="ckeditor2" cols="80" rows="10" style="font-size:16px;"><?php echo $dong['motaSP']?></textarea></td>
                <script typy="text/javascript">CKEDITOR.replace("ckeditor2")</script>
            </tr>
            <tr>
                <td>Loại sản phẩm</td>
                <td>
                    <select name="idCL">
                        <?php
                            $sql1 = "select * from loaisanpham";
                            $run1 = mysqli_query($conn,$sql1);
                            while($dong1=mysqli_fetch_array($run1,MYSQLI_ASSOC))
                            {
                                $selected = "";
                                if($dong1['idCL'] == $dong['idCL'])
                                {
                                    $selected = "selected";
                                }
                        ?>
                        <option <?php echo $selected; ?> value="<?php echo $dong1['idCL']?>"><?php echo $dong1['tenCL']?></option>
                        <?php 
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hình ảnh sản phẩm</td>
                <td><input type="file" name="hinhanhSP" value="" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <?php echo "<button name='sua' onclick= \" return confirm('Bạn muốn sửa sản phẩm này?') \" style='color:#fff;font-size:22px;font-weight:bold;background:#9400d3;padding:8px 12px;border-radius:6px;outline:none'>Sửa</button>" ?>
                    </div> 
                </td>
            </tr>
        </table>
    </form>
</div>