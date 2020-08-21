<?php
include"koneksi.php";
$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$judul=$_POST['judul'];
	$pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];
	$simpan=mysqli_query($connect, "insert into buku values (id_buku,'$judul','$pengarang','$penerbit')");
	if($simpan){
		echo"<script>alert('Data Berhasil di Tambahkan');
		window.location.href = 'koleksi_buku.php';
		</script>";
		
	}else{
		echo"<script>alert('Data Gagal di Tambahkan');
		window.location.href = 'koleksi_buku.php';
		</script>";
	}
?>