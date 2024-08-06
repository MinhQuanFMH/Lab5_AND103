<?php
$res=array();
$s="localhost"; $u="root"; $p=""; $db="lab5";
$con=new mysqli($s,$u,$p,$db);
$MaSP=$_POST['MaSP'];//truyen tham so cho bien MaSP
$TenSP=$_POST['TenSP'];
$MoTa=$_POST['MoTa'];
$sql="INSERT into SanPham (MaSP,TenSP,MoTa) VALUES ('$MaSP','$TenSP','$MoTa')";
if($con->query($sql)===TRUE){
    $res['success']=1;
    $res['message']="Insert thanh cong";
    echo json_encode($res);
}
else{
    $res['success']=0;
    $res['message']="Insert that bai";
    echo json_encode($res);
}
$con->close();
//http://localhost/Lab5/insert2.php?MaSP=SP2&TenSP=san pham 2&MoTa=mo ta san pham 2