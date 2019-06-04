<?php
    include('../core/config.php');  
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $sql_page = mysqli_query($conn,"select * from sanpham");
    $count = mysqli_num_rows($sql_page);
    $total_page = ceil($count/5);
    if($current_page>$total_page)
    {
        $current_page = $total_page;
    }
    else if( $current_page <1)
    {
        $current_page=1;
    }
    $limit = 5;
    $start = ($current_page-1)* $limit; 
    $sql = "select * from sanpham, loaisanpham where sanpham.idCL=loaisanpham.idCL order by idSP desc limit $start,$limit";
    $run = mysqli_query($conn,$sql);
?>
<div class="container container-SP">
    <h2 class="text-center">Danh sách sản phẩm</h2>
    <div style="display:flex;margin:20px 0">
        <div style="display:block;margin-right:40px">
            <label>Tên sản phẩm</label>
            <input type="text" name="tenSP" id="searchSP-text" value="" style="padding:4px 8px">
        </div>
        <div style="display:block;margin-right:40px">
            <form action="" method="get">
                <label>Loại sản phẩm</label>
                <select name="idCL" id ="idCL" style="padding:5px 8px">
                    <option value="0">---- Lựa chọn ----</option>
                    <?php
                        $sql1 = "select * from loaisanpham";
                        $run1 = mysqli_query($conn,$sql1);
                        while($dong1=mysqli_fetch_array($run1,MYSQLI_ASSOC))
                        {
                    ?>
                    <option value="<?php echo $dong1['idCL']?>"><?php echo $dong1['tenCL']?></option>
                    <?php 
                        }
                    ?>
                </select>
                <input type="button" id="searchSP-btn" value="Tìm" style="padding:4px 8px">
                <input type="button" id="reloadPage-btn" value="Reload" style="padding:4px 8px">
            </form>
        </div>
    </div>
    <div style="width:100%" class="ajax-SP">
        <table class="table table-hover table-SP">
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
                while($dong = mysqli_fetch_array($run,MYSQLI_ASSOC))
                {
                ?>
                <tr>
                    <td class="text-center"><?php echo $dong['idSP'] ?></td>
                    <td class="text-center"><?php echo $dong['maSP'] ?></td>
                    <td class="text-center" style="padding:0 4px;"><?php echo $dong['tenSP'] ?></td>
                    <td style="padding:0 4px;"><?php echo number_format($dong['giaSP'],0,",",".") ?></td>
                    <td style="padding:0 4px;"><?php echo $dong['motaSP'] ?></td>
                    <td class="text-center"><?php echo $dong['tenCL'] ?></td>
                    <td class="text-center"><img src="uploads/<?php echo $dong['hinhanhSP']?>" alt="" width="100px"></td>
                    <td class="text-center">
                        <a href="index.php?quanly=suasanpham&id=<?php echo $dong['idSP'] ?>"><i class="fa fa-edit"></i></a>
                    </td>
                    <td class="text-center">
                        <?php echo "<a onclick= \" return confirm('Bạn thật sự muốn xóa tin tin này sao?') \" href='modules/quanlysanpham/xuly.php?act=xoa&id=$dong[idSP]' ?><i class='fa fa-trash'></i></a>" ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div id="box-page-btn">
        <?php
            if($current_page >1 && $total_page >1)
            {
                echo '<a class="page-btn" href="index.php?quanly=danhsachsanpham&page='.($current_page-1).'">Prev</a>';
            }
            for($i=1; $i<= $total_page; $i++)
            {
                if($i==$current_page) 
                    echo '<a class="page-btn" href="index.php?quanly=danhsachsanpham&page='.($current_page).'">'.$i.'</a>';
                else
                    echo '<a class="page-btn" href="index.php?quanly=danhsachsanpham&page='.$i.'">'.$i.'</a>';
            }
            if($current_page < $total_page && $total_page >1)
                echo '<a class="page-btn" href="index.php?quanly=danhsachsanpham&page='.($current_page+1).'">Next</a>';
        ?>
        </div>    
    </div>
</div>
<script>
    $("#searchSP-btn").click(function(){
        var tenSP = $("#searchSP-text").val();
        var idCL = $("#idCL").val();
        $.get("modules/quanlysanpham/ajax-danhsachsp.php",{tenSP:tenSP,idCL:idCL},function(data){
            $(".ajax-SP").html(data);
        });
    });

    $("#reloadPage-btn").click(function(){
        location.reload();
    });
</script>
