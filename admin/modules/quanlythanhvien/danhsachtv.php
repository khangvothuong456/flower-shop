<?php
    include('../core/config.php');    
    $sql = "select * from taikhoan order by idUser asc";
    $run = mysqli_query($conn,$sql);
?>
<div class="container">
<h2 class="text-center">Danh sách thành viên</h2>           
<table class="table table-hover">
    <thead>
        <tr>
            <th style="width:3%;padding:0 5px">ID</th>
            <th style="padding:0 5px">Tên tài khoản</th>
            <th style="padding:0 5px">Mật khẩu</th>
            <th style="width:12%;padding:0 5px">Tên</th>
            <th style="padding:0 5px">Chứng minh</th>
            <th style="width:20%;padding:0 5px">Địa chỉ</th>
            <th style="padding:0 5px">Email</th>
            <th style="padding:0 5px">Số điện thoại</th>
            <th style="padding:0 5px">Level</th>
            <th style="padding:0 5px">Ghi chú</th>
            <th colspan="2" style="font-size:18px;font-weight:bold">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC))
            {
        ?>
        <tr>
            <td class="text-center"><?php echo $dong['idUser'] ?></td>
            <td class="text-center"><?php echo $dong['username'] ?></td>
            <td>*********</td>
            <td><?php echo $dong['name'] ?></td>
            <td><?php echo $dong['cmnd'] ?></td>
            <td><?php echo $dong['address'] ?></td>
            <td><?php echo $dong['email'] ?></td>
            <td><?php echo $dong['phone'] ?></td>
            <td class="text-center"><?php echo $dong['level'] ?></td>
            <td class="text-center"><?php echo $dong['note'] ?></td>
            <td class="text-center"><a href="index.php?quanly=suathanhvien&id=<?php echo $dong['idUser'] ?>&level=<?php echo $dong['level'] ?>"><i class="fa fa-edit"></i></a></td>
            <td class="text-center"><a href="modules/quanlythanhvien/xuly.php?act=xoa&id=<?php echo $dong['idUser'] ?>"><i class="fa fa-trash"></i></a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
</div>