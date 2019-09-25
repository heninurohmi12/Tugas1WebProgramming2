<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];

// update data ke database
mysqli_query($koneksi,"update datamahasiswa set Nama='$Nama', Username ='$Username', Password='$Password', Email='$Email' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>