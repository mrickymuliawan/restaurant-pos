<?php 
	session_start();
	include 'koneksi.php';
	
	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$pass=$_POST['pass'];

		$result=mysqli_query($koneksi,"select*from tbl_user where username='$username' and password='$pass' ");
		if (mysqli_num_rows($result) > 0 ) {
			$_SESSION['user']=$username;
			header("location:../produk.php");
		}
		else{
			header('location:../login.php?pesan=Username atau password salah');
		}
	}
	else{
		session_unset();
		header("location:../login.php");
	}
 ?>