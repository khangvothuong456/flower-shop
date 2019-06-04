<div style="width:100%">
    <div class="title-2">
        <h2>Tin Tức</h2>
    </div>
    <div style="border:1px solid rgba(0,0,0,.1);padding:0 15px 0 15px">
        <?php 
            $sql = "select * from tintuc";
            $run = mysqli_query($conn,$sql);
        while($dong=mysqli_fetch_array($run,MYSQLI_ASSOC))
        {
        ?>
        <div style="width:100%;margin:0 auto;color:#191919">
            <div>
                <img src="admin/uploads/<?php echo $dong['hinhanhTT']?>" style="width:200px;height:200px;border:1px solid #ccc;margin:0 15px 15px 0;float:left"/>
                <h1 style="margin-top:15px"><a href="index.php?act=chitiettintuc&id=<?php echo $dong['idTT']?>" style="color:red;text-decoration:none;margin-top:15px"><?php echo $dong['tenTT'] ?></a></h1>
                <div style="font-style:italic;font-size:16px;margin: 4px 0">áp dụng từ <?php echo date("d-m-Y", strtotime($dong['ngaytuTT'])); ?> đến <?php echo date("d-m-Y", strtotime($dong['ngaydenTT'])); ?></div>
                <div style="font-size:20px;margin: 4px 0">Đăng bởi:</div>
                <div style="font-size:20px;margin: 4px 0">Ngày đăng: <span style="font-size:22px;color:#757575;font-style:italic"><?php echo date("d-m-Y", strtotime($dong['ngaydangTT'])); ?></span></div>
                <div style="line-height:24px"><?php echo $dong['motaTT'] ?></div>
                <hr width="80%" align="left" style="clear:both;border:1px solid #ccc"></hr>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="clear"></div>
