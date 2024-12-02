<?php 
include("../_header.php");

use Ramsey\Uuid\Uuid;

// printf(
//     "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($conn, $_POST['ket']));
    mysqli_query($conn, "INSERT INTO tb_obat(id_obat, nama_obat, ket_obat) VALUES ('$uuid', '$nama', '$ket')") or die (mysqli_error($conn));
    echo"<script>window.location='data.php';</script>";
}else if (isset($_POST['edit'])){

}



?>