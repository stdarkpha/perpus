<?php
include"koneksi.php";
	$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$id=$_GET['id'];
	$simpan=mysqli_query($connect, "DELETE from buku where id_buku='$id';");
	if($simpan){
		echo"<script>alert('Data Berhasil di Delete');
		window.location.href = 'koleksi_buku.php';
		</script>";
		
	}else{
		echo"<script>alert('Data Gagal di Delete');
		window.location.href = 'koleksi_buku.php';
		</script>";
	}
?>
					