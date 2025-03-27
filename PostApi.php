<?php

include "kon.php";

$Jdl = isset($_POST["Judul"]) ? $_POST["Judul"] : " ";
$Pnl = isset($_POST["Penulis"]) ? $_POST["Penulis"] : " ";
$Gnr = isset($_POST["Genre"]) ? $_POST["Genre"] : " ";
$Thn = isset($_POST["TahunTerbit"]) ? $_POST["TahunTerbit"] : " ";
$Price = isset($_POST["Harga"]) ? $_POST["Harga"] : " ";
$Cvr = isset($_POST["Cover"]) ? $_POST["Cover"] : " ";


$sql = "INSERT INTO `buku` (`Judul`, `Penulis`, `Genre`, `TahunTerbit`, `Harga`, `Cover`) VALUES ('".$Jdl."', '".$Pnl."', '".$Gnr."', '".$Thn."', '".$Price."', '".$Cvr."'); " ;

$query = mysqli_query($kon, $sql);

if ($query){
    $msgg = "Data telah Tersimpan";
}else{
    $msgg = "Data gagal tersimpan";
}


$response = array(
    'Status' => 'Berhasil',
    'msgg' =>$msgg
);


echo json_encode($response);

?>