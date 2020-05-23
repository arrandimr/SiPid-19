<?php
include "koneksi.php";

$query = "INSERT INTO pasien (nama, sex, no_telp, kota_lahir, tanggal_lahir, Usia, kwn, negara, Status, kawin, Tempat, Alamat, kronis, Ayah,ibu) 
VALUES ('".$nama."','".$jeniskel."','".$telp."','".$temlahir."','".$tgllahir."','".$usia."','".$kwn."','".$negara."','".$status."','".$kawin."','".$tempat."','".$alamat."','".$penyakit."','".$penyakitayah."','".$penyakitibu."')";

mysqli_query($conn,$query);
?>
