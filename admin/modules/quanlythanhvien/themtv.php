<div class="form-wrapper">
    <form action="modules/quanlythanhvien/xuly.php" method="post" enctype="multipart/form-data">
        <h2>Thêm Thành Viên</h2>
        <table style="width:100%" cellspacing="10">
            <tr>
                <td>Tên thành viên</td>
                <td><input type="text" name="name" value="" /></td>
            </tr>
            <tr>
                <td>Tên tài khoản</td>
                <td><input type="text" name="username" value="" /></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="text" name="password" value="" /></td>
            </tr>
            <tr>
                <td>Chứng minh nhân dân</td>
                <td><input type="text" name="cmnd" value="" /></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="address" value="" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="" /></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="phone" value="" /></td>
            </tr>
            <tr>
            	<td>Loại tài khoản</td>
                <td>
                	<select id="level" name="level">
                    	<option value="0" >Khách hàng</option>
                        <option value="1" >Nhân viên</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align="center"><button name="them" style="color:#fff;font-size:22px;font-weight:bold;background:#9400d3;padding:8px 12px;border-radius:6px;outline:none">Thêm</button></div> 
                </td>
            </tr>
        </table>
    </form>
</div>