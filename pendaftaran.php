<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran
	</title>
</head>
<body style= "background-image: url(kertas.jpg); background-size: cover;">

		<p>Selamat Datang Di Halaman Pendaftaran | SMK Luqman Al Hakim Kudus
		<br>
		<hr>
		<a href="pendaftaran.php">Pendaftaran</a> | <a href="admin.php">Admin</a> | <a href="Login.php">Logout</a>
		<form action="proses_pendaftaran.php" method="post">
		<fieldset>
			<legend>Pendaftaran</legend>

			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
				</tr>

				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email" placeholder="Masukkan Email"></td>
				</tr>

				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="date" name="tanggal_lahir">
				</tr>
			
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat" placeholder="Masukkan Alamat"></textarea></td>
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