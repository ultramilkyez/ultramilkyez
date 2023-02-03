<?php

	include "koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];


	mysqli_query($mysqli, "update pendaftaran set nama='$nama', email='$email' tanggal_lahir='$tanggal_lahir', alamat='$alamat' where id='$id'");

	header ("location: tampil_pendaftaran.php");

?>