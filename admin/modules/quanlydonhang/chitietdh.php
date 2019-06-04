<?php
    include('../core/config.php');
    $sql = "select * from donhang where idDH = '$_GET[id]'";
    $rows = mysqli_fetch_assoc(mysqli_query($conn,$sql));
?>
<table style="width:80%;margin:0 auto">
    <h2 class="text-center">Chi tiết đơn hàng</h2>
    <tr>
        <td>Mã đơn hàng</td>
        <td><?php echo $rows['idDH']?></td>
    </tr>
    <tr>
        <td>Tên người đặt</td>
        <td><?php echo $rows['nameDH']?></td>
    </tr>
    <tr>
        <td>Là thành viên?</td>
        <td><?php echo (($rows['idUser'])!=0)?"Có":"Không" ;?></td>
    </tr>
    <?php
        if($rows['idUser']!=0)
        {
            echo    "<tr>
                        <td>ID thành viên</td>
                        <td>".$rows['idUser']."</td>        
                    </tr>";
        }
    ?>
    <tr>
        <td>Số điện thoại</td>
        <td><?php echo $rows['phoneDH']?></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><?php echo $rows['addressDH']?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $rows['emailDH']?></td>
    </tr>
    <tr>
        <td>Hóa Đơn</td>
        <td><?php echo number_format($rows['tongtienDH'],0,".",",")," VNĐ"?></td>
    </tr>
    <tr>
        <td>Ngày đặt hàng</td>
        <td><?php echo date("d-m-Y", strtotime($rows['ngayDH']))?></td>
    </tr>
    <tr>
        <td>Trạng thái đơn hàng</td>
            <td>
            <?php
                if($rows['statusDH']=='1')
                    echo "Chưa liên lạc";
                else if($rows['statusDH']=='2')
                    echo "Chưa giao";
                else
                    echo "Đã giao";
            ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <?php 
                echo "<a onclick=\" confirm('Bạn chưa liên lạc?') \" href='modules/quanlydonhang/xuly.php?idDH=$_GET[id]&statusDH=1'><i class='fas fa-circle' style='color:red;font-size:18px'></i></a>";
                echo "<a onclick=\" confirm('Bạn đã liên lạc?') \" href='modules/quanlydonhang/xuly.php?idDH=$_GET[id]&statusDH=2' style='margin:0 8px'><i class='fas fa-circle' style='color:yellow;font-size:18px'></i></a>";
                echo "<a onclick=\" confirm('Bạn đã giao hàng?') \" href='modules/quanlydonhang/xuly.php?idDH=$_GET[id]&statusDH=3'><i class='fas fa-circle' style='color:green;font-size:18px'></i></a>";
            ?>
        </td>
    </tr>
</table>
<div class="container">
    <h2 class="text-center">Sản phẩm của đơn hàng</h2>           
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select * from donhang,chitietdonhang,sanpham where  donhang.idDH = '$_GET[id]' AND donhang.idDH = chitietdonhang.idDH AND chitietdonhang.idSP = sanpham.idSP";
        $run = mysqli_query($conn,$sql);
        $i = 1;
        while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC))
        {  
        ?>
        <tr>
            <td class="text-center"><?php echo $i; ?></td>
            <td align="center">
                <img src="uploads/<?php echo $dong['hinhanhSP']; ?>" alt="" width="100px">    
            </td>
            <td class="text-center"><?php echo $dong['maSP']; ?></td>
            <td class="text-center"><?php echo $dong['tenSP']; ?></td>
            <td class="text-center"><?php echo number_format($dong['giaSP'],0,",","."); ?></td>
            <td class="text-center"><?php echo $dong['soluongDH']; ?></td>
            <td class="text-center"><?php echo number_format($dong['giaSP']*$dong['soluongDH'],0,",",".")." VNĐ"; ?></td>
        </tr>
        <?php
        $i++;
        }
        ?>
        </tbody>
    </table>
</div>