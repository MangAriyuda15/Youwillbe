<?php

include ("koneksi/koneksi.php");

$nama = $_POST['nama'];
$alamat = $_POST ['alamat'];
$telephone =$_POST['telephone'];
$email =$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$simpan = "INSERT INTO tb_daftar_pelanggan (nama,alamat,telephone,email,password)
	VALUES ('$nama','$alamat','$telephone','$email','$password')";
$hasil=mysqli_query($koneksi,$simpan);

if ($hasil){
	echo "DATA BERHASIL DI INPUTKAN";
}
else {
	echo "DATA GAGAL DI INPUTKAN";
}
?>