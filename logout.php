<?php
session_start();
unset($_SESSION['user']);

if(isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: ./');
}
