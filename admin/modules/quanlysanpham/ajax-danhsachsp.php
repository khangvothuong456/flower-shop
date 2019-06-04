<?php
    include('../../../core/config.php');  

    $tenSP = $_GET['tenSP'];
    $idCL = $_GET['idCL'];

    $sql = "select * from sanpham, loaisanpham where sanpham.idCL=loaisanpham.idCL AND idSP!=0 ";
    if($tenSP != "")
        $sql .= "AND tenSP_kd like '%$tenSP%' ";
    if($idCL != "0") 
        $sql .="AND loaisanpham.idCL='$idCL'";

    $run = mysqli_query($conn,$sql);
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th style="width:5%">ID</th>
            <th style="width:5%">Mã</th>
            <th style="width:15%">Tên</th>
            <th style="width:5%">Giá</th>
            <th style="width:40%">Mô tả</th>
            <th style="width:10%">Loại</th>
            <th style="width:10%">Hình ảnh</th>
            <th colspan="2">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $emptySP = mysqli_num_rows($run);
        if($emptySP==0)
            echo "<div style='color:red;font-size:22px;text-align:center;margin:12px 0'>Không có sản phẩm này !</div>";
        else
        {
            while($rows = mysqli_fetch_assoc($run))
            {
            ?>
            <tr>
                <td class="text-center"><?php echo $rows['idSP'] ?></td>
                <td class="text-center"><?php echo $rows['maSP'] ?></td>
                <td class="text-center" style="padding:0 4px;"><?php echo $rows['tenSP'] ?></td>
                <td style="padding:0 4px;"><?php echo number_format($rows['giaSP'],0,",",".") ?></td>
                <td style="padding:0 4px;"><?php echo $rows['motaSP'] ?></td>
                <td class="text-center"><?php echo $rows['tenCL'] ?></td>
                <td class="text-center"><img src="uploads/<?php echo $rows['hinhanhSP']?>" alt="" width="100px"></td>
                <td class="text-center">
                    <a href="index.php?quanly=suasanpham&id=<?php echo $rows['idSP'] ?>"><i class="fa fa-edit"></i></a>
                </td>
                <td class="text-center">
                    <?php echo "<a onclick= \" return confirm('Bạn thật sự muốn xóa tin tin này sao?') \" href='modules/quanlysanpham/xuly.php?act=xoa&id=$rows[idSP]' ?><i class='fa fa-trash'></i></a>" ?>
                </td>
            </tr>
            <?php
            }
        }
        ?>
    </tbody>
</table>