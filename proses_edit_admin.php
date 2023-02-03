<?php

	include "koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$informasi = $_POST['informasi'];


	mysqli_query($mysqli, "update admin set nama='$nama', tanggal='$tanggal', informasi='$informasi' where id='$id'");

	header ("location: tampil_admin.php");

?>