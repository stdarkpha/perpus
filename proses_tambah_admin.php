<?php
include"koneksi.php";
	$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$nama=$_POST['nama'];
	$user=$_POST['user'];
	$password=$_POST['pass'];
	$simpan=mysqli_query($connect, "insert into admin values (id_admin,'$nama','$user','$password')");
	if($simpan){
		echo"<script>alert('Admin Berhasil di Tambahkan');
		window.location.href = 'admin.php';
		</script>";
		
	}else{
		echo"<script>alert('Admin Gagal di Tambahkan');
		window.location.href = 'admin.php';
		</script>";
	}
?>