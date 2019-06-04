<?php
    include('../core/config.php');
    $sql = "select * from loaisanpham where idCL='$_GET[id]'";
    $run = mysqli_query($conn,$sql);
    $dong = mysqli_fetch_array($run,MYSQLI_ASSOC);
?>
<div class="form-wrapper">
    <form action="modules/quanlydanhmuc/xuly.php?id=<?php echo $dong['idCL']?>" method="post" enctype="multipart/form-data">
        <h2>Sửa Loại Sản Phẩm</h2>
        <table style="width:100%" cellspacing="10">
            <tr>
                <td>Tên</td>
                <td><input type="text" name="tenCL" value="<?php echo $dong['tenCL']?>" /></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name="thutuCL" value="<?php echo $dong['thutuCL']?>" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center">
                        <?php echo "<button name='sua' onclick= \" return confirm('Bạn muốn sửa loại sản phẩm này?') \" style='color:#fff;font-size:22px;font-weight:bold;background:#9400d3;padding:8px 12px;border-radius:6px;outline:none'>Sửa</button>" ?>
                    </div> 
                </td>
            </tr>
        </table>
    </form>
</div>