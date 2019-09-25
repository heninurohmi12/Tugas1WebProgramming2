<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];

// menginput data ke database
mysqli_query($koneksi,"insert into datamahasiswa values('','$Nama','$Username','$Password','$Email')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>