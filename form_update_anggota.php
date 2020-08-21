<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
		include"koneksi.php";
		$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
		$idx=$_GET['id'];
		$sqli="select *from anggota where id_anggota='$idx'";
		$banyak=mysqli_query($connect,$sqli);
		$data=mysqli_fetch_array($banyak);
?>
	<script>
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Update Data Buku</h1>
			<form name="input"method="POST"action="proses_update_anggota.php" class="table member update">
				<div class="row head">
					<div class="list">No</div>
					<div class="list">Name</div>
					<div class="list">Address</div>
					<div class="list">Phone</div>
					<div class="list">Gender</div>
					<div class="list">Password</div>
					<div class="list">Action</div>
				</div>
				<div class="row body">
					<div class="list"><input type="text"name="id"value="<?php echo $data['id_anggota'];?>"readonly="true"></div>
					<div class="list"><input type="text"name="nama"value="<?php echo $data ['nama'];?>"></div>
					<div class="list"><input type="text"name="alamat"value="<?php echo $data ['alamat'];?>"></div>
					<div class="list"><input type="text"name="notlpn"value="<?php echo $data ['no_telp'];?>"></div>
					<div class="list"><select name="jk"size="1">
						<option value="<?php echo $data ['jk'];?>"><?php echo $data ['jk'];?></option>
						<option value="L">L</option>
						<option value="P">P</option>
					</select></div>
					<div class="list"><input class="input" type="password" name="pass"value="<?php echo $data['pass'];?>"></div>
					<div class="list"><input type="submit" class="update" value="Update"> ||
					<a class="remove" href="anggota.php">Batal</a></div>
				</div>
			</form>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=3'); } ?>