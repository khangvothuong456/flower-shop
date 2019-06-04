<?php
    $id = $_GET['id'];
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $sql_page = mysqli_query($conn,"select * from sanpham where idCL='$id'");
    $count = mysqli_num_rows($sql_page);
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
?>
<div class="title-2">
    <h2>
        <?php 
            $sql = "select * from loaisanpham where idCL='$id'";
            $run = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($run,MYSQLI_ASSOC);
            echo $row['tenCL'];
        ?>
    </h2>
</div>
<div class="row">
    <?php 
        $sql = "select * from sanpham where idCL='$id' limit $start,$limit";
        $run = mysqli_query($conn,$sql);
        while($rows=mysqli_fetch_array($run,MYSQLI_ASSOC))
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
                            <a href="index.php?act=chitietsanpham&item=<?php echo $rows['idSP'] ?>" class="see-details-btn">Xem chi tiết</a><a href="index.php?act=addcart&item=<?php echo $rows['idSP']?>&k=<?php echo $id?>&p=<?php echo $current_page?>" class="add-cart-btn"><i class="fa fa-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
</div>
<div class="row">
    <div class="col-xs-12 col-md-12 text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                    if($current_page >1 && $total_page >1)
                    {
                        echo '<li class="page-item">
                                    <a class="page-link" href="index.php?act=loaisanpham&id='.$id.'&page='.($current_page-1).'" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>';
                    }
                    for($i=1; $i<= $total_page; $i++)
                    {
                        if($i==$current_page)
                            echo '<li class="page-item"><a class="page-link" href="index.php?act=loaisanpham&id='.$id.'&page='.($current_page).'">'.$i.'</a></li>';
                        else
                            echo '<li class="page-item"><a class="page-link" href="index.php?act=loaisanpham&id='.$id.'&page='.$i.'">'.$i.'</a></li>';
                    }
                    if($current_page < $total_page && $total_page >1)
                    {
                        echo '<li class="page-item">
                                        <a class="page-link" href="index.php?act=loaisanpham&id='.$id.'&page='.($current_page+1).'" aria-label="Next">
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