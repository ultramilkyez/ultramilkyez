<?php
include "koneksi.php";

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$informasi = $_POST['informasi'];

$input = mysqli_query ($mysqli, "insert into admin set nama='$nama', tanggal='$tanggal_', informasi='$informasi'");

if ($input){
		header ('location:tampil_admin.php?status=SUKSES:)');
	}else{
		header ('location:admin.php?status=GAGAL');
	}
?>