<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
?>
	<script>
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>List Admin Perpuss</h1>
			<div class="table">
				<div class="row head">
					<div class="list">No</div>
					<div class="list">Nama</div>
					<div class="list">User</div>
					<div class="list">Password</div>
					<div class="list">Action</div>
				</div>
				<?php
					include "koneksi.php";
					$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
					$no=1;
					$sqli="select *from admin";
					$banyak=mysqli_query($connect,$sqli);
					while($row=mysqli_fetch_array($banyak))
					{
				?>
				<div class="row body">
					<div class="list"><?php echo $no ;?></div>
					<div class="list"><?php echo $row['nama'] ;?></div>
					<div class="list"><?php echo $row['user'];?></div>
					<div class="list"><?php echo $row['pass'];?></div>
					<div class="list"><a class="update" href="form_update_admin.php?id=<?php echo $row['id_admin'] ;?>">Update</a> ||
						<a class="remove" href="proses_delete_admin.php?id=<?php echo $row['id_admin']; ?>">Hapus</a></div>
				</div>
				<?php $no=$no+1; }?>
			</div>
			<a href="form_tambah_admin.php" class="add">+ Tambah Admin Perpuss</a>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=4'); } ?>