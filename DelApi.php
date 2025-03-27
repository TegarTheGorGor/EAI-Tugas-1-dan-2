<?php

include "kon.php";


$id = $_GET['Id'];
$Jdl = isset($_POST["Judul"]) ? $_POST["Judul"] : " ";
$Pnl = isset($_POST["Penulis"]) ? $_POST["Penulis"] : " ";
$Gnr = isset($_POST["Genre"]) ? $_POST["Genre"] : " ";
$Thn = isset($_POST["TahunTerbit"]) ? $_POST["TahunTerbit"] : " ";
$Price = isset($_POST["Harga"]) ? $_POST["Harga"] : " ";
$Cvr = isset($_POST["Cover"]) ? $_POST["Cover"] : " ";


$sql = "DELETE FROM `buku` WHERE `buku`.`Id` = ".$id.";";


$query = mysqli_query($kon, $sql);

if ($query){
    $msgg = "Data telah Terhapus";
}else{
    $msgg = "Data gagal Terhapus";
}


$response = array(
    'Status' => 'Berhasil',
    'msgg' =>$msgg
);


echo json_encode($response);

?>