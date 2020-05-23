<?php
include "koneksi.php";

$query = "INSERT INTO peduli (nama, sex, email, telp, prop, nominal, rekening) VALUES ('".$nama."','".$sex."','".$email."','".$telp."','".$prop."','".$Nominal."','".$Rekening."')";

mysqli_query($conn,$query);
?>
