<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "daftar_buku";
$port = 3306;

$kon = mysqli_connect($servername,$username,$password,$database,$port);
if (!$kon){
    die("error");
}

?>