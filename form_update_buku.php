<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
	include"koneksi.php";
	$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
	$idx=$_GET['id'];
	$sqli="select *from buku where id_buku='$idx'";
	$banyak=mysqli_query($connect,$sqli);
	$data=mysqli_fetch_array($banyak);
?>
	<script> $('nav .menu .list:nth-child(2)').addClass('active');
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Update Data Buku</h1>
			<form name="input"method="POST"action="proses_update_buku.php" class="table update">
				<div class="row head">
					<div class="list">Id</div>
					<div class="list">Judul</div>
					<div class="list">Pengarang</div>
					<div class="list">Penerbit</div>
					<div class="list">Action</div>
				</div>
				<div class="row body">
					<div class="list"><input type="text"name="id"value="<?php echo $data['id_buku'];?>"readonly="true"></div>
					<div class="list"><input type="text"name="judul"value="<?php echo $data ['judul'];?>"></div>
					<div class="list"><input type="text"name="pengarang"value="<?php echo $data ['pengarang'];?>"></div>
					<div class="list"><input type="text"name="penerbit"value="<?php echo $data ['penerbit'];?>"></div>
					<div class="list"><input type="submit" class="update" value="Update"> ||
					<a class="remove" href="koleksi_buku.php">Batal</a></div>
				</div>
			</form>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=2'); } ?>