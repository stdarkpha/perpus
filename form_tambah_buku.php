<?php
	include 'head.php';
	if (isset ($_SESSION['login'])){
?>
	<script>
		$('nav').addClass('active');
	</script>
	<section class="book-list">
		<div class="grid">
			<h1>Tambah Data Buku</h1>
			<form name="input" method="POST" action="proses_tambah_buku.php" class="table update simple">
				<div class="row head">
					<div class="list">Judul</div>
					<div class="list">Pengarang</div>
					<div class="list">Penerbit</div>
					<div class="list">Action</div>
				</div>
				<div class="row body">
					<div class="list"><input required type="text" name="judul" placeholder="judul"></div>
					<div class="list"><input required type="text" name="pengarang" placeholder="pengarang"></div>
					<div class="list"><input required type="text" name="penerbit" placeholder="penerbit"></div>
					<div class="list"><input type="submit" class="kirim" value="Kirim"> ||
					<input type="reset" class="remove" value="batal"></div>
				</div>
			</form>
		</div>
	</section>
	<?php include 'foot.php' ?>	
<?php }else{ header('location:login_form.php?page=2'); } ?>