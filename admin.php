<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin
	</title>
</head>
<body style= "background-image: url(kertas.jpg); background-size: cover;">
		<p>Selamat Datang Di Halaman Admin | SMK Luqman Al Hakim Kudus
		<br>
		<hr>
		<a href="pendaftaran.php">Pendaftaran</a> | <a href="admin.php">Admin</a> | <a href="login.php">Logout</a>
		<form action="proses_admin.php" method="post">
		<fieldset>
			<legend>Admin</legend>

			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
				</tr>

				<tr>
					<td>Tanggal </td>
					<td>:</td>
					<td><input type="date" name="tanggal">
				</tr>
			
				<tr>
					<td>Informasi</td>
					<td>:</td>
					<td><textarea name="informasi" style="width:645px; height:275px;" placeholder="masukkan informasi.."></textarea></td>
				</tr>
				<td><input type="submit" value="Daftar"></td>
			</table>
		</fieldset>
	</form>
	<br>
	<br>
	<hr>
	<div>Copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>