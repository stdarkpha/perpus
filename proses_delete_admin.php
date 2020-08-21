<?php
include"koneksi.php";
	$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$id=$_GET['id'];
	$simpan=mysqli_query($connect, "DELETE from admin where id_admin='$id';");
	if($simpan){
		echo"<script>alert('Admin Berhasil di Delete');
		window.location.href = 'admin.php';
		</script>";
		
	}else{
		echo"<script>alert('Admin Gagal di Delete');
		window.location.href = 'admin.php';
		</script>";
	}
?>