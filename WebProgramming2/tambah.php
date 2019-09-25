<!DOCTYPE html>
<html>
<head>
	<title>CRUD TUGAS1</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_db.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="Nama" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>

</body>
</html>