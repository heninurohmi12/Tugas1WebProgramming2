<!DOCTYPE html>
<html>
<head>
	<title>CRUD TUGAS1</title>
</head>
<center><body>

	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from datamahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="Username" value="<?php echo $d['Username']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="Password" value="<?php echo $d['Password']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="Email" value="<?php echo $d['Email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		</center>
		<?php 
	}
	?>

</body>
</html>