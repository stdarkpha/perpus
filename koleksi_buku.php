<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
?>
	<script> $('nav .menu .list:nth-child(2)').addClass('active');
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Kumpulan Koleksi Buku</h1>
			<div class="table">
				<div class="row head">
					<div class="list">No</div>
					<div class="list">Judul</div>
					<div class="list">Pengarang</div>
					<div class="list">Penerbit</div>
					<div class="list">Action</div>
				</div>
				<?php
				include "koneksi.php";
				$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
				$no=1;
				$sqli="select *from buku";
				$banyak=mysqli_query($connect,$sqli);
				while($row=mysqli_fetch_array($banyak)){
				?>
				<div class="row body">
					<div class="list"><?php echo $no ;?></div>
					<div class="list"><?php echo $row['judul'] ;?></div>
					<div class="list"><?php echo $row['pengarang'];?></div>
					<div class="list"><?php echo $row['penerbit'];?></div>
					<div class="list"><a class="update" href="form_update_buku.php?id=<?php echo $row['id_buku'] ;?>">Update</a> ||
					<a class="remove" href="proses_delete_buku.php?id=<?php echo $row['id_buku']; ?>">Hapus</a></div>
				</div>
				<?php $no=$no+1; }?>
			</div>
			<a href="form_tambah_buku.php" class="add">+ Tambah Koleksi Buku</a>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=2'); } ?>