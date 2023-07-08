<?php

include ("koneksi/koneksi.php");

$email =$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$simpan = "INSERT INTO tb_login_karyawan (email,password)
	VALUES ('$email','$password')";
$hasil=mysqli_query($koneksi,$simpan);

if ($hasil){
	echo "DATA BERHASIL DI INPUTKAN";
}
else {
	echo "DATA GAGAL DI INPUTKAN";
}
?>