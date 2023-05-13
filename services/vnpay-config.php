<?php
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = "http://localhost:8080/shophoa/dat-hang-thanh-cong.html/thanhcong";
    $vnp_TmnCode = "TM43GT7L";//Mã website tại VNPAY 
    $vnp_HashSecret = "ZIKSFCVLMFVSJMNXPADOTRQQOHYUNQOM"; //Chuỗi bí mật 
    $startTime = date("YmdHis");
    $expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
?>