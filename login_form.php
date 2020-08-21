<?php
	include 'head.php';
	$page = $_GET['page'];
	if(isset($_POST['login'])){
		include"koneksi.php";
		$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
		$user=$_POST['user'];
		$sqli="select *from admin where user='$user' and pass='$pass' ";
		$banyak=mysqli_query($connect, $sqli);
		$user= mysqli_real_escape_string ($connect, $_POST['user'] );
		$pass=$_POST['pass'];
	if(($_POST['user']==$user)and($_POST['pass']==$pass)){
		$_SESSION['user']= $user;
		$_SESSION['login'] = 1;
	}
	if((isset($_SESSION['login']))and($_SESSION['login']==1)){if ($page == 1){
			header("location:index.php");exit();
	}else if ($page == 2){
			header("location:koleksi_buku.php");exit();
	}else if ($page == 3){
			header("location:anggota.php");exit();
	}else if ($page == 4){
			header("location:admin.php");exit();
			}
		}
	}
?>
	<section id="login">
		<form name="login" method="POST" action="">
			<label for="">Username</label>
			<input class="input" type="text" name="user" placeholder="Masukkan Username Anda" required>
			<label for="">Password</label>
			<input class="input" type="password" name="pass" placeholder="Masukkan Password Anda" required>
			<div class="btn">
				<input type="submit" name="login" class="kirim" value="Sign-in">
				<input type="reset" class="batal" value="Batal">
			</div>
		</form>
		<div class="bg">
			<img src="img/otf223487.jpg" alt="bg-header">
		</div>
	</section>
	<script>
		$(window).on("scroll", function() {
            if($(window).scrollTop()) {
                $('nav').addClass('active');
            } else {
                $('nav').removeClass('active');
            }
        });
	</script>
<?php include 'foot.php'; ?>
			
				
		
		