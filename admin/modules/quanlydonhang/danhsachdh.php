<div class="container">
    <h2 class="text-center">Danh sách đơn hàng</h2>
    <div style="display:flex;margin:20px 0">
        <div style="display:block;margin-right:30px">
            <label>Từ ngày</label>
            <input type="date" name="from-date" id="from-date" value="" style="padding:4px 8px">
        </div>
        <div style="display:block;margin-right:30px">
            <label>Đến ngày</label>
            <input type="date" name="to-date" id="to-date" value="" style="padding:4px 8px">
        </div>
        <div style="display:block;margin-right:30px">
            <form action="" method="get">
                <label>Loại sản phẩm</label>
                <select name="stutusDH" id ="statusDH" style="padding:5px 8px;margin-right:40px">
                    <option value="0">---- Lựa chọn ----</option>
                    <option value="1">Chưa liên lạc</option>
                    <option value="2">Đã liên lạc</option>
                    <option value="3">Đã giao</option>
                </select>
                <input type="button" id="searchDH-btn" value="Tìm" style="padding:5px 8px">
                <input type="button" id="reloadPage-btn" value="Reload" style="padding:5px 8px">
            </form>
        </div>
    </div>           
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Địa chỉ</th>
                <th>Số diện thoại</th>
                <th>Hóa Đơn</th>
                <th>Chi tiết</th>
                <th>Ngày</th>
                <th>Trạng thái</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "select * from donhang";
        $run = mysqli_query($conn,$sql);
        while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC))
        {
        ?>
        <tr>
            <td class="text-center"><?php echo $dong['idDH']; ?></td>
            <td><?php echo $dong['nameDH']; ?></td>
            <td><?php echo $dong['addressDH']; ?></td>
            <td class="text-center"><?php echo $dong['phoneDH']; ?></td>
            <td><?php echo number_format($dong['tongtienDH'],0,",",".")." VNĐ"; ?></td>
            <td>
                <?php echo "<a href='index.php?quanly=chitietdonhang&id=$dong[idDH]' style='text-decoration:none;color:red;font-size:18px'>Chi Tiết</a>"; ?>
            </td>
            <td class="text-center">
                <?php echo date("d-m-Y", strtotime($dong['ngayDH'])); ?>
            </td>
            <td style="text-align:center;padding: 4px 0">
                <?php 
                    if($dong['statusDH']=='1') 
                        echo "<i class='fas fa-circle' style='color:red;font-size:14px'></i>";
                    else if($dong['statusDH']=='2')
                        echo "<i class='fas fa-circle' style='color:yellow;font-size:14px'></i>";
                    else
                        echo "<i class='fas fa-circle' style='color:green;font-size:14px'></i>";
                ?>
            </td>
            <td align="center">
                <?php echo "<a onclick= \" return confirm('Bạn thật sự muốn xóa tin tin này sao?') \" href='modules/quanlydonhang/xuly.php?act=xoa&id=$dong[idDH]' ?><i class='fa fa-trash'></i></a>"; ?>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
<script>
    $("#searchDH-btn").click(function(){
        var from_date = $("#from-date").val();
        var to_date = $("#to-date").val();
        var statusDH = $("#statusDH").val();
        $.get("modules/quanlydonhang/ajax-danhsachdh.php",{from_date:from_date,to_date:to_date,statusDH:statusDH},function(data){
            $(".table-hover").html(data);
        });
    });

    $("#reloadPage-btn").click(function(){
        location.reload();
    });
</script>