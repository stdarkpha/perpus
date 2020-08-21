<?php
//"localhost","id8523865_root","rades888","d8523865_dbkampus"
$host="localhost";
$name="root";
$pass="";
$db="perpus";
$connect=mysqli_connect($host,$name,$pass,$db)or die("koneksi gagal");
$selectdb=mysqli_select_db($connect,$db)or die("gagal");
?>