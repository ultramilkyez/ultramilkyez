<?php

	include "koneksi.php";
	$id =$_GET['id'];
	$tampil = mysqli_query($mysqli, "select * from pendaftaran where id='$id'");
	$hasil = mysqli_fetch_array($tampil);

?>
<h2>Edit Dari Data Database</h2>
<form method="post" action="proses_edit_pendaftaran.php">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
				<input type="text" name="nama" value="<?php echo $hasil['nama']?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" value="<?php echo $hasil['email']?>"></td>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="tanggal_lahir" value="<?php echo $hasil['tanggal_lahir']?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" value="<?php echo $hasil['alamat']?>"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Kirim" value="Edit"></td>
		</tr>
	</table>
</form>