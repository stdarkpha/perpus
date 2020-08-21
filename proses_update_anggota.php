<?php
include"koneksi.php";
$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$no=$_POST['notlpn'];
	$jk=$_POST['jk'];
	$pass=$_POST['pass'];
	$simpan=mysqli_query($connect,"UPDATE anggota SET id_anggota='$id', nama='$nama', alamat='$alamat', no_telp='$no',jk='$jk', pass='$pass' WHERE id_anggota='$id';");
	if($simpan){
		echo"<script>alert('Data Anggota Berhasil di Update');
		window.location.href = 'anggota.php';
		</script>";
		
	}else{
		echo"<script>alert('Data Anggota Gagal di Update');
		window.location.href = 'anggota.php';
		</script>";
	}
?>