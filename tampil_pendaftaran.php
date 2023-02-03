<?php

include "koneksi.php";

?>
<p align="center"><h2>DATA PENDAFTARAN</h2>
<hr>
<a href="tampil_pendaftaran.php">Pendaftaran</a> | <a href="tampil_admin.php">Admin</a> | <a href="tampil_login.php">Logout</a>
<br>
<hr>
<p align="center"><b>DATA PENDAFTAR</b></p>
<br>
<table border="1" width="900" height="100" align="center">
	<tr>
		<td>Nomer</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Tanggal Lahir</td>
		<td>Alamat</td>
		<td>Opsi</td>
	</tr>
	<?php


		$tampil = mysqli_query($mysqli, "select * from pendaftaran");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['email']; ?></td>
		<td><?php echo $hasil['tanggal_lahir']; ?></td>
		<td><?php echo $hasil['alamat']; ?></td>
		<td>
			<a href="edit_pendaftaran.php?id=<?php echo $hasil['id']; ?>">edit</a> |
			<a href="hapus_pendaftaran.php?hapus&id=<?= $hasil['id']; ?>">hapus</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
