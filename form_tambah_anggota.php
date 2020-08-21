<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
?>
	<script>
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Tambah Anggota Perpuss</h1>
			<form name="input" method="POST" action="proses_tambah_anggota.php" class="table member simple">
				<div class="row head">
					<div class="list">Name</div>
					<div class="list">Address</div>
					<div class="list">Phone</div>
					<div class="list">Gender</div>
					<div class="list">Password</div>
					<div class="list">Action</div>
				</div>
				<div class="row body">
					<div class="list"><input required type="text"name="nama"placeholder="Nama"></div>
					<div class="list"><input required type="text"name="alamat"placeholder="Alamat"></div>
					<div class="list"><input required type="text"name="no_telp"placeholder="No Telepon"></div>
					<div class="list"><select name="jk" size="1">
						<option value="-">--Pilih--</option>
						<option value ="L">L</option>
						<option value ="P">P</option>
					</select></div>
					<div class="list"><input required class="input" type="password"name="pass"placeholder="Password"></div>
					<div class="list"><input type="submit" class="kirim" value="Kirim"> ||
					<input type="reset" class="remove" value="batal"></div>
				</div>
			</form>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=3'); } ?>