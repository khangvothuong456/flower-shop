<?php
    include('../../../core/config.php'); 

    $from_date = $_GET['from_date'];
    $to_date = $_GET['to_date'];
    $statusDH = $_GET['statusDH'];
    $output = "";

    $sql = "select * from donhang where idDH!='0' ";
    if($from_date != "" && $to_date != "")
        $sql .= "AND ngayDH between '$from_date' AND '$to_date' ";
    if($statusDH != '0')
        $sql .= "AND statusDH = '$statusDH'";
    
    $run = mysqli_query($conn,$sql);
    
    $output .= "<table class='table table-hover'>
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
                    <tbody>";
    if(@mysqli_num_rows($run)>0)
    {
        while($rows=mysqli_fetch_assoc($run))
        {
            $statusDH_led = 0;
            if($rows['statusDH']=='1') 
                $statusDH_led ="<i class='fas fa-circle' style='color:red;font-size:14px'></i>";
            else if($rows['statusDH']=='2')
                $statusDH_led ="<i class='fas fa-circle' style='color:yellow;font-size:14px'></i>";
            else
                $statusDH_led ="<i class='fas fa-circle' style='color:green;font-size:14px'></i>";

            $output .= "<tr>
                            <td class='text-center'>".$rows['idDH']."</td>
                            <td>".$rows['nameDH']."</td>
                            <td>".$rows['addressDH']."</td>
                            <td class='text-center'>".$rows['phoneDH']."</td>
                            <td>".number_format($rows['tongtienDH'],0,',','.')." VNĐ</td>
                            <td><a href='index.php?quanly=chitietdonhang&id=".$rows['idDH']."' style='text-decoration:none;color:red;font-size:18px'>Chi Tiết</a></td>
                            <td class='text-center'>".date('d-m-Y',strtotime($rows['ngayDH']))."</td>
                            <td style='text-align:center;padding:4px 0'>".$statusDH_led."</td>
                            <td align='center'>
                                '<a onclick= \" return confirm('Bạn thật sự muốn xóa tin tin này sao?') \" href='modules/quanlydonhang/xuly.php?act=xoa&id=$rows[idDH]' ?><i class='fa fa-trash'></i></a>'
                            </td>
                        </tr>
                    </tbody>
                </table>";
        }
        echo $output;
    }
    else
        echo "<div style='color:red;font-size:22px;text-align:center;margin:12px 0'>Không tìm thấy !</div>";
?>