<?php

include "koneksi.php";

?>
<p align="center"><h2>DATA LOGIN</h2>
<hr>
<a href="tampil_pendaftaran.php">Pendaftaran</a> | <a href="tampil_admin.php">Admin</a> | <a href="login.php">Logout</a>
<br>
<hr>
<br>
<table border="1" width="900" height="100" align="center">
	<tr>
		<td>Nomer</td>
		<td>Username</td>
		<td>Password</td>
		<td>Opsi</td>
	</tr>
	<?php


		$tampil = mysqli_query($mysqli, "select * from login");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['username']; ?></td>
		<td><?php echo $hasil['password']; ?></td>
		<td>
			<a href="edit_login.php?id=<?php echo $hasil['id']; ?>">edit</a> |
			<a href="hapus_login.php?hapus&id=<?= $hasil['id']; ?>">hapus</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
