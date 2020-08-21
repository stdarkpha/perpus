<?php
include"koneksi.php";
$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$id=$_GET['id'];
	$simpan=mysqli_query($connect,"DELETE from anggota where id_anggota='$id';");
	if($simpan){
		echo"<script>alert('Anggota Berhasil di Hapus');
		window.location.href = 'anggota.php';
		</script>";
		
	}else{
		echo"<script>alert('Anggota Gagal di Hapus');
		window.location.href = 'anggota.php';
		</script>";
	}
?>
					