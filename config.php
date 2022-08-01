<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
// session_destroy();
/*;
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$vnp_TmnCode = "DNRCVIWL"; //Website ID in VNPAY System
$vnp_HashSecret = "QICCPVYQUBVMYZWQYEQZLEGTSKGQQQTK"; //Secret key
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = baseurl() . "/vnpay_return.php";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis', strtotime('+15 minutes', strtotime($startTime)));

$order_id = 0;

$order_id = trim(substr($startTime, -5));

// if (isset($_SESSION['order_id'])) {
//     $order_id = $_SESSION['order_id'] + 1;
//     $_SESSION['order_id'] = $order_id;
// } else {
//     $_SESSION['order_id'] = 1;
//     $order_id = $_SESSION['order_id'];
// }

function baseurl()
{
    if (isset($_SERVER['HTTPS'])) {
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
        $protocol = 'http';
    }
    return  "$protocol://" . $_SERVER['HTTP_HOST'];
}
