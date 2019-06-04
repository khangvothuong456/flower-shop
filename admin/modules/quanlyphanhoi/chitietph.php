<?php
    include('../core/config.php');    
    $id = $_GET['id'];
    $sql = "select * from phanhoi where idPH='$id'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($run);
?>
<table style="width:80%;margin:0 auto">
    <tr style="width:100%">
        <td style="width:30%;font-size:18px;font-weight:bold;padding:8px">Tên</td>
        <td><?php echo $row['namePH']?></td>
    </tr>
    <tr>
        <td style="width:30%;font-size:18px;font-weight:bold;padding:8px">Thành viên</td>
        <td>
            <?php
                $sql = "select * from taikhoan where idUser='$row[idUser]'";
                $ok = mysqli_query($conn,$sql);
                if(mysqli_num_rows($ok)>0)
                    echo "Là thành viên của shop";
                else
                    echo "Không là thành viên của shop";
            ?>
        </td>
    </tr>
    <tr>
        <td style="width:30%;font-size:18px;font-weight:bold;padding:8px">Số điện thoại</td>
        <td><?php echo $row['phonePH']?></td>
    </tr>
    <tr>
        <td style="width:30%;font-size:18px;font-weight:bold;padding:8px">Địa chỉ</td>
        <td><?php echo $row['addressPH']?></td>
    </tr>
    <tr>
        <td style="width:30%;font-size:18px;font-weight:bold;padding:8px">Tiêu đề</td>
        <td><?php echo $row['tieudePH']?></td>
    </tr>
    <tr>
        <td style="width:30%;font-size:18px;font-weight:bold;padding:8px">Nội dung</td>
        <td><?php echo $row['motaPH']?></td>
    </tr>
    <tr>
        <td style="width:30%;font-size:18px;font-weight:bold;padding:8px">Trạng thái</td>
        <td><?php if($row['statusPH']==0) echo "Chưa xử lý"; else echo "Đã xử lý"; ?></td>
    </tr>
</table>