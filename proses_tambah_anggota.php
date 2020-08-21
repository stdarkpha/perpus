<?php
include"koneksi.php";
$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$no=$_POST['no_telp'];
	$jk=$_POST['jk'];
	$pass=$_POST['pass'];
	$simpan=mysqli_query($connect,"insert into anggota values (id_anggota,'$nama','$alamat','$no','$jk', '$pass')");
	if($simpan){
		echo"<script>alert('Anggota Berhasil di Tambahkan');
		window.location.href = 'anggota.php';
		</script>";
		
	}else{
		echo"<script>alert('Anggota Gagal di Tambahkan');
		window.location.href = 'anggota.php';
		</script>";
	}
?>	
					