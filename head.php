<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Perpuss</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#0082CC">
    <!-- <link rel="shortcut icon" href="img/fav.ico" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0aa1f9181b.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="grid">
            <h1><a href="index.php?page=1">perpuss</a></h1>
            <div class="menu">
                <a class="list" href="index.php">Home</a>
                <a class="list" href="koleksi_buku.php">List Book</a>
                <a class="list" href="anggota.php">Member</a>
            </div>
            <div class="user">
            <?php if(isset($_SESSION['login'])): ?>
                <span ><?php echo $_SESSION['user']; ?> <i class="fas fa-sort-down"></i></span>
                <div class="drop">
                    <a href="admin.php">List Admin</a>
                    <a href="logout.php">Log-Out</a>
                </div>
            <?php else: ?>
                    <a href="login_form.php?page=1" class="cta">Login</a>
            <?php endif; ?>
            </div>
        </div>
    </nav>