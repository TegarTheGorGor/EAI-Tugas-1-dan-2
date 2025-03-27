<?php

include "kon.php";


$id = $_GET['Id'];
$Jdl = isset($_POST["Judul"]) ? $_POST["Judul"] : " ";
$Pnl = isset($_POST["Penulis"]) ? $_POST["Penulis"] : " ";
$Gnr = isset($_POST["Genre"]) ? $_POST["Genre"] : " ";
$Thn = isset($_POST["TahunTerbit"]) ? $_POST["TahunTerbit"] : " ";
$Price = isset($_POST["Harga"]) ? $_POST["Harga"] : " ";
$Cvr = isset($_POST["Cover"]) ? $_POST["Cover"] : " ";


$sql = "UPDATE `buku` SET `Harga` = '".$Price."', `Cover` = '".$Cvr."' WHERE `buku`.`Id` =  '".$id."' ;"; 


$query = mysqli_query($kon, $sql);

if ($query){
    $msgg = "Data telah Terupdate";
}else{
    $msgg = "Data gagal terupdate";
}


$response = array(
    'Status' => 'Berhasil',
    'msgg' =>$msgg
);


echo json_encode($response);

?>