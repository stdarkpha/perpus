<?php
include"koneksi.php";
$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$user=$_POST['user'];
	$password=$_POST['pass'];
	$simpan=mysqli_query($connect, "UPDATE admin SET id_admin='$id', nama='$nama', user='$user', pass='$password' WHERE id_admin='$id';");
	if($simpan){
		echo"<script>alert('Data Admin Berhasil di Update');
		window.location.href = 'admin.php';
		</script>";
		
	}else{
		echo"<script>alert('Data Admin Gagal di Update');
		window.location.href = 'admin.php';
		</script>";
	}
?>