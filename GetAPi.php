<?php

include 'header.php';
include "kon.php";

$sql = "SELECT * FROM buku";
$query = mysqli_query ($kon, $sql);
while($data = mysqli_fetch_array($query)){
   

    $item[] = array(
        'Judul' =>$data["Judul"],
        'Penulis' =>$data["Penulis"],
        'Genre' =>$data["Genre"],
        'Tahun Terbit' =>$data["TahunTerbit"],
        'Harga' =>$data["Harga"],
        'Cover' =>$data["Cover"]
    );
}

$response = array(
    'status'=>'Berhasil',
    'data'=>$item

);

echo json_encode($response);
?>



