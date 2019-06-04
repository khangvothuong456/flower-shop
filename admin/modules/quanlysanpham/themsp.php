<?php
    include('../core/config.php');    
    $sql = "select * from loaisanpham";
    $run = mysqli_query($conn,$sql);
?>
<div class="form-wrapper">
    <form action="modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
        <h2>Thêm Sản Phẩm</h2>
        <table style="width:100%" cellspacing="10">
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" name="maSP" value="" /></td>
            </tr>
            <tr>
                <td>Tên sản phâm</td>
                <td><input type="text" name="tenSP" value="" /></td>
            </tr>
            <tr>
                <td>Tên sản phẩm(không dấu)</td>
                <td><input type="text" name="tenSP_kd" value="" /></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input type="text" name="giaSP" value="" /></td>
            </tr>
            <tr>
                <td>Mô tả sản phẩm</td>
                <td><textarea name="motaSP" id="ckeditor1" cols="80" rows="10" style="font-size:16px;"></textarea></td>
                <script typy="text/javascript">CKEDITOR.replace("ckeditor1")</script>
            </tr>
            <tr>
                <td>Loại sản phẩm</td>
                <td>
                    <select name="idCL">
                        <?php
                            while($dong=mysqli_fetch_array($run,MYSQLI_ASSOC))
                            {
                        ?>
                        <option value="<?php echo $dong['idCL']?>"><?php echo $dong['tenCL']?></option>
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
                    <div align="center"><button name="them" style="color:#fff;font-size:22px;font-weight:bold;background:#9400d3;padding:8px 12px;border-radius:6px;outline:none">Thêm</button></div> 
                </td>
            </tr>
        </table>
    </form>
</div>