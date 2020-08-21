<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
		include"koneksi.php";
		$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
		$idx=$_GET['id'];
		$sqli="select *from admin where id_admin='$idx'";
		$banyak=mysqli_query($connect,$sqli);
		$data=mysqli_fetch_array($banyak);
?>
	<script> $('nav .menu .list:nth-child(2)').addClass('active');
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Update Data Buku</h1>
			<form name="input"method="POST"action="proses_update_admin.php" class="table update">
				<div class="row head">
					<div class="list">Id</div>
					<div class="list">Nama</div>
					<div class="list">User</div>
					<div class="list">Password</div>
					<div class="list">Action</div>
				</div>
				<div class="row body">
					<div class="list"><input type="text"name="id"value="<?php echo $data['id_admin'];?>"readonly="true"></div>
					<div class="list"><input type="text"name="nama"value="<?php echo $data ['nama'];?>"></div>
					<div class="list"><input type="text"name="user"value="<?php echo $data ['user'];?>"></div>
					<div class="list"><input class="input" type="password"name="pass"value="<?php echo $data ['pass'];?>"></div>
					<div class="list"><input type="submit" class="update" value="Update"> ||
					<a class="remove" href="admin.php">Batal</a></div>
				</div>
			</form>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=4'); } ?>