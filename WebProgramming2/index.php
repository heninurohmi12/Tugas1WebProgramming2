<!DOCTYPE html>
<html>
<head>
	<title>CRUD TUGAS1</title>
</head>
<body>
	<h2>CRUD DATA MAHASISWA </h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>OPSI</th>
		</tr>

		<?php 

		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from datamahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Username']; ?></td>
				<td><?php echo $d['Password']; ?></td>
				<td><?php echo $d['Email']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>