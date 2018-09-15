<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0; //qty = quantity

//CRUD


if (!empty($sid)) {
    //查 DB 商品的表 ,看有沒有這件商品
    if (!empty($qty)) {
        //設定，修改
        $_SESSION['cart'][$sid] = $qty;

    } else {
        //刪除
        unset($_SESSION['cart'][$sid]);
    }
}

echo json_encode($_SESSION['cart']);