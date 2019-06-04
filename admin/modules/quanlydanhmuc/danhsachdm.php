<?php
    include('../core/config.php');    
    $sql = "select * from loaisanpham order by idCL asc";
    $run = mysqli_query($conn,$sql);
?>
<div class="container">
    <h2 class="text-center">Danh sách danh mục</h2>           
    <table class="table table-hover" style="text-align:center">
        <thead>
            <tr>
                <th>ID danh mục</th>
                <th>Tên danh mục</th>
                <th>Thứ tự danh mục</th>
                <th colspan="2">Quản lý danh mục</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($rows = mysqli_fetch_array($run,MYSQLI_ASSOC))
                {
                    echo "<tr>";
                        echo "<td>".$rows['idCL']."</td>";
                        echo "<td>".$rows['tenCL']."</td>";
                        echo "<td>".$rows['thutuCL']."</td>";
                        echo "<td align='center'><a href='index.php?quanly=suadanhmuc&id=$rows[idCL]'><i class='fa fa-edit'></i></a></td>";
                        echo "<td align='center'><a onclick= \" return confirm('Bạn muốn xóa loại sản phẩm này?') \" href='modules/quanlydanhmuc/xuly.php?act=xoa&id=$rows[idCL]'><i class='fa fa-trash'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>