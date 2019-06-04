<div id="content">
    <?php 
        if(isset($_GET['quanly']))
            $tam = $_GET['quanly'];
        else
			$tam = '';    
		
		if(isset($_SESSION["admin"]))
		{
			if($_SESSION["admin"]["level"]==2) 
			{
				switch($tam) 
				{
					case 'themdanhmuc': include('quanlydanhmuc/themdm.php'); break;
					case 'danhsachdanhmuc': include('quanlydanhmuc/danhsachdm.php'); break;
					case 'suadanhmuc': include('quanlydanhmuc/suadm.php'); break;
	
					case 'themsanpham': include('quanlysanpham/themsp.php'); break;
					case 'danhsachsanpham': include('quanlysanpham/danhsachsp.php'); break;
					case 'suasanpham': include('quanlysanpham/suasp.php'); break;
	
					case 'themtintuc': include('quanlytintuc/themtt.php'); break;
					case 'danhsachtintuc': include('quanlytintuc/danhsachtt.php'); break;
					case 'suatintuc': include('quanlytintuc/suatt.php'); break;
	
					case 'themthanhvien': include('quanlythanhvien/themtv.php'); break;
					case 'danhsachthanhvien': include('quanlythanhvien/danhsachtv.php'); break;
					case 'suathanhvien': include('quanlythanhvien/suatv.php'); break;
	
					case 'danhsachphanhoi': include('quanlyphanhoi/danhsachph.php'); break;
					case 'chitietphanhoi': include('quanlyphanhoi/chitietph.php'); break;
	
					case 'danhsachdonhang': include('quanlydonhang/danhsachdh.php'); break;
					case 'chitietdonhang': include('quanlydonhang/chitietdh.php'); break;
	
					default: include('dashboard.php'); break;
				}
			}
			else
			{
				switch($tam) 
				{
					case 'themdanhmuc': include('quanlydanhmuc/themdm.php'); break;
					case 'danhsachdanhmuc': include('quanlydanhmuc/danhsachdm.php'); break;
					case 'suadanhmuc': include('quanlydanhmuc/suadm.php'); break;
	
					case 'themsanpham': include('quanlysanpham/themsp.php'); break;
					case 'danhsachsanpham': include('quanlysanpham/danhsachsp.php'); break;
					case 'suasanpham': include('quanlysanpham/suasp.php'); break;
	
					case 'themtintuc': include('quanlytintuc/themtt.php'); break;
					case 'danhsachtintuc': include('quanlytintuc/danhsachtt.php'); break;
					case 'suatintuc': include('quanlytintuc/suatt.php'); break;

					case 'themthanhvien': echo '<script>alert("Bạn không có quyền");window.history.back();</script>'; break;
					case 'danhsachthanhvien': echo '<script>alert("Bạn không có quyền");window.history.back();</script>'; break;
					case 'suathanhvien': echo '<script>alert("Bạn không có quyền");window.history.back();</script>'; break;
	
					case 'danhsachphanhoi': include('quanlyphanhoi/danhsachph.php'); break;
					case 'chitietphanhoi': include('quanlyphanhoi/chitietph.php'); break;
	
					case 'danhsachdonhang': include('quanlydonhang/danhsachdh.php'); break;
					case 'chitietdonhang': include('quanlydonhang/chitietdh.php'); break;
	
					default: include('dashboard.php'); break;
				}
			}
		}
    ?>
</div>