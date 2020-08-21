<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
?>
	<script>
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Tambah Admin Perpuss</h1>
			<form name="input"method="POST"action="proses_tambah_admin.php" class="table update simple">
				<div class="row head">
					<div class="list">Nama</div>
					<div class="list">Username</div>
					<div class="list">Password</div>
					<div class="list">Action</div>
				</div>
				<div class="row body">
					<div class="list"><input required type="text" name="nama" placeholder="Nama Admin"></div>
					<div class="list"><input required type="text" name="user" placeholder="Username Admin"></div>
					<div class="list"><input required class="input" type="password" name="pass" placeholder="Password"></div>
					<div class="list"><input type="submit" class="kirim" value="Kirim"> ||
					<input type="reset" class="remove" value="batal"></div>
				</div>
			</form>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=4'); } ?>