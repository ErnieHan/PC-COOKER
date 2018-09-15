<?php

$mysqli = new mysqli('localhost', 'Ernie', 'admin', 'proj_f01');

$mysqli->query("SET NAMES utf8");

if(! isset($_SESSION)){
    session_start();
}