<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if(isset($_GET['sids'])){
    $sids = explode(',', $_GET['sids']);

    foreach($sids as $sid){
        $_SESSION['cart'][$sid] =1;
    }

}

echo json_encode($_SESSION['cart']);