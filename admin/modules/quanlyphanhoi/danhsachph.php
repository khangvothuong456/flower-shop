<div class="container">
    <h2 class="text-center">Danh sách phản hồi</h2>           
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Ngày</th>
                <th>Tổng tiền</th>
                <th>Chi tiết</th>
                <th>Trạng thái</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from phanhoi";
            $run = mysqli_query($conn,$sql);
            while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC))
            {
            ?>
            <tr>
                <td class="text-center"><?php echo $dong['idPH'] ?></td>
                <td class="text-center"><?php echo $dong['namePH'] ?></td>
                <td>
                    <?php echo date("d-m-Y", strtotime($dong['ngayPH'])); ?>
                </td>
                <td><?php echo $dong['addressPH'] ?></td>
                <td class="text-center">
                    <?php echo "<a href='index.php?quanly=chitietphanhoi&id=$dong[idPH]' style='text-decoration:none;color:red;font-size:18px'>Chi Tiết</a>" ?>
                </td>   
                <td class="text-center">
                    <?php 
                        if($dong['statusPH']=='0') 
                            echo "<a href='modules/quanlyphanhoi/xuly.php?act=xuly&id=$dong[idPH]' onclick= \" return confirm('Bạn đã xử lý phản hồi?') \" style='color:red'><i class='fas fa-circle'></i></a>";
                        else 
                            echo "<i class='fas fa-circle' style='color:#00FF00'>";
                    ?>
                </td>
                <td class="text-center">
                    <?php echo "<a onclick= \" return confirm('Bạn thật sự muốn xóa tin tin này sao?') \" href='modules/quanlyphanhoi/xuly.php?act=xoa&id=$dong[idPH]' ?><i class='fa fa-trash'></i></a>" ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>