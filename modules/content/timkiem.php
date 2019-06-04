<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hoatuoialumbale';
    $con = mysqli_connect($hostname,$username,$password,$dbname);
    if(!$con)
    {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    mysqli_select_db($con,$dbname);    
    mysqli_set_charset($con,"utf8");
?>

<?php
if(isset($_GET['act']))
if($_GET['act']=='timkiem'){
echo
'<div class="title-2">
    <h2>Danh Sách Tìm Kiếm</h2>
</div>
<form style="width:100%;margin-top:15px">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="tenSP" style="font-size:20px">Tên sản phẩm</label>
                <input type="type" class="form-control" id="tenSP" name="tenSP" value="'.$_GET["searchtext"].'">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="idCL" style="font-size:20px">Loại hoa</label>
                <select class="form-control" name="id" id="idCL">
                    <option value="0">--- Chọn Loại ---</option>';
                    
                        $sql1 = "select * from loaisanpham";
                        $run1 = mysqli_query($con,$sql1);
                        while($rows1=mysqli_fetch_array($run1,MYSQLI_ASSOC))
                        {
                            echo "<option value='$rows1[idCL]'>".$rows1['tenCL']."</option>";
                        }                   
               echo '</select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="idgia" style="font-size:20px">Loại hoa</label>
                <select class="form-control" name="idgia" id="idgia">
                    <option value="0">--- Chọn Mức Giá ---</option>
                    <option value="1">Dưới 300.000 VNĐ</option>
                    <option value="2">300.000 - 500.000 VNĐ</option>
                    <option value="3">500.000 - 1.000.000 VNĐ</option>
                    <option value="4">1.000.000 - 2.000.000 VNĐ</option>
                    <option value="5">Trên 2.000.000 VNĐ</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="searchKind" style="font-size:20px">Tìm kiếm</label><br>
                <input type="button" name="search" value="Gửi" id="tknc" class="btn btn-success" />
            </div>
        </div>
    </div>
</form>';
}
?>

<?php
	$search_txt=' ';
	$id=0; $idgia=0;
	if($_GET['searchtext']!='')
    $search_txt = $_GET['searchtext'];
	if(isset($_GET['id'])){
	    $id = $_GET['id']; // lấy loại sản phẩm
    	$idgia = $_GET['idgia']; // lấy mức giá
	}
	
    switch($idgia)
    {
        case '1': $giamin=1; $giamax=300000; break;
        case '2': $giamin=300000+1; $giamax=500000; break;
        case '3': $giamin=500000+1; $giamax=1000000; break;
        case '4': $giamin=1000000+1; $giamax=2000000; break;
        case '5': $giamin=2000000+1; $giamax=999999999999; break;
        default: $giamin=0; $giamax=999999999999; break;
    }

    $sql ="select * from sanpham where idSP!=0 ";
    if($search_txt != "")
        $sql .="AND tenSP_kd like '%$search_txt%' ";
    if($id != "0") 
        $sql .="AND idCL='$id' ";
    if($idgia != "0")
        $sql .="AND giaSP between '$giamin' AND '$giamax'";

    $run = mysqli_query($con,$sql);
	
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	$count = mysqli_num_rows($run);
	$total_page = ceil($count/6);
    if($current_page>$total_page)
    {
        $current_page = $total_page;
    }
    else if( $current_page <1)
    {
        $current_page=1;
    }
    $limit = 6;
    $start = ($current_page-1)*$limit;
	
	$sql .=" limit $start,$limit";
	$run = mysqli_query($con,$sql);
?>
<div class="search">
    <?php 
        if(@mysqli_num_rows($run)>0)
        {
            while($rows=mysqli_fetch_assoc($run))
            {
    ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="box">
                <div class="box-img">
                    <a href="index.php?act=chitietsanpham&item=<?php echo $rows['idSP'] ?>"><img src="admin/uploads/<?php echo $rows['hinhanhSP'] ?>" alt="" class="img-products"></a>
                </div>
                <div class="box-content">
                    <div style="width:100%;height:40px;background:#95819d;line-height:40px;text-align:center">
                        <h3><?php echo $rows['tenSP'] ?></h3>
                    </div>
                    <div style="width:100%;height:40px;line-height:40px;text-align:center">
                        <p><?php echo number_format($rows['giaSP'],0,",",".") ?> VNĐ</p>
                    </div>
                    <div style="width:100%;padding:10px 0 20px 0">
                        <div style="display:block;text-align:center">
                            <a href="index.php?act=chitietsanpham&item=<?php echo $rows['idSP'] ?>" class="see-details-btn">Xem chi tiết</a><a href="index.php?act=addcart&item=<?php echo $rows['idSP']?>&k=<?php echo $id?>" class="add-cart-btn"><i class="fa fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
            }
        }
        else
            echo "<div style='color:red;font-size:22px;text-align:center;margin:12px 0'>Không tìm thấy sản phẩm này</div>";
    ?>

	<div class="row">
        <div class="col-xs-12 col-md-12 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                        if($current_page >1 && $total_page >1)
                        {
                            echo '<li class="page-item">
                                        <a class="page-link" href="index.php?searchtext='.$search_txt.'&id='.$id.'&idgia='.$idgia.'&act=timkiem&page='.($current_page-1).'" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>';
                        }
                        for($i=1; $i<= $total_page; $i++)
                        {
                            if($i==$current_page)
                                echo '<li class="page-item"><a class="page-link" href="index.php?searchtext='.$search_txt.'&id='.$id.'&idgia='.$idgia.'&act=timkiem&page='.($current_page).'">'.$i.'</a></li>';
                            else
                                echo '<li class="page-item"><a class="page-link" href="index.php?searchtext='.$search_txt.'&id='.$id.'&idgia='.$idgia.'&act=timkiem&page='.$i.'">'.$i.'</a></li>';
                        }
                        if($current_page < $total_page && $total_page >1)
                        {
                            echo '<li class="page-item">
                                    <a class="page-link" href="index.php?search-text='.$search_txt.'&act=timkiem&page='.($current_page+1).'" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>';
                        }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
<script>
    $("#tknc").click(function(){
        var tenSP = $("#tenSP").val();
        var id = $("#idCL").val();
        var idgia = $("#idgia").val();
        $.get("modules/content/timkiem.php",{searchtext:tenSP,id:id,idgia:idgia},function(data){
            $(".search").html(data);
        })
    });
</script>
</div>
