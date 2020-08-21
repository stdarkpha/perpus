<?php
		include"koneksi.php";
		$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
			$id=$_POST['id'];
			$judul=$_POST['judul'];
			$pengarang=$_POST['pengarang'];
			$penerbit=$_POST['penerbit'];
			$simpan=mysqli_query($connect,"UPDATE buku SET id_buku='$id', judul='$judul', pengarang='$pengarang', penerbit='$penerbit' WHERE id_buku='$id';");
			if($simpan){
				echo"<script>alert('Update Data Berhasil');
				window.location.href = 'koleksi_buku.php';
				</script>";
				
			}else{
				echo"<script>alert('Update Data Gagal');
				window.location.href = 'koleksi_buku.php';
				</script>";
			}
?>
					