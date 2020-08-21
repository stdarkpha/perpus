<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
?>
	<script> $('nav .menu .list:last-child').addClass('active');
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Daftar Anggota Perpuss</h1>
			<div class="table member">
				<div class="row head">
					<div class="list">No</div>
					<div class="list">Name</div>
					<div class="list">Address</div>
					<div class="list">Phone</div>
					<div class="list">Gender</div>
					<div class="list">Password</div>
					<div class="list">Action</div>
				</div>
				<?php
				include "koneksi.php";
				$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
				$no=1;
				$sqli="select *from anggota";
				$banyak=mysqli_query($connect,$sqli);
				while($row=mysqli_fetch_array($banyak))
				{
				?>
				<div class="row body">
					<div class="list"><?php echo $no ;?></div>
					<div class="list"><?php echo $row['nama'] ;?></div>
					<div class="list"><?php echo $row['alamat'];?></div>
					<div class="list"><?php echo $row['no_telp'];?></div>
					<div class="list"><?php echo $row['jk'];?></div>
					<div class="list"><?php echo $row['pass'];?></div>
					<div class="list"><a class="update" href="form_update_anggota.php?id=<?php echo $row['id_anggota'] ;?>">Update</a> || 
					<a class="remove" href="proses_delete_anggota.php?id=<?php echo $row['id_anggota']; ?>">Hapus</a></div>
				</div>
				<?php $no=$no+1; }?>
			</div>
			<a href="form_tambah_anggota.php" class="add">+ Tambah Anggota Baru</a>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=3'); } ?>