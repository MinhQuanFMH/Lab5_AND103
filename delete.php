<?php
$res=array();
$s="localhost"; $u="root"; $p=""; $db="lab5";
$con=new mysqli($s,$u,$p,$db);
$MaSP=$_POST['MaSP'];//truyen tham so cho bien MaSP

$sql="DELETE FROM SanPham WHERE MaSP='$MaSP'";
if($con->query($sql)===TRUE){
    $res['success']=1;
    $res['message']="Xoa thanh cong";
    echo json_encode($res);
}
else{
    $res['success']=0;
    $res['message']="Xoa that bai";
    echo json_encode($res);
}
$con->close();
//http://localhost/Lab5/insert2.php?MaSP=SP2&TenSP=san pham 2&MoTa=mo ta san pham 2