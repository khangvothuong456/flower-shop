<?php
	include('../../../core/config.php');
	$username = $_POST['username'];
	$sql="select * from taikhoan where username='$username'";
	$run = mysqli_query($conn,$sql);
	if(mysqli_num_rows($run)>0) // đã tồn tại tài khoản này
		echo "<span style='color:red'>Tài khoản này đã tồn tại.</span>"
?>