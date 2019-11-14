<?php 
session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	if($data['role']=="admin") {
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		header("location:halaman_admin.php");
	} else if($data['role']=="user1") {
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "user1";
		header("location:halaman_user1.php");
	} else if($data['role']=="user2") {
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "user2";
		header("location:halaman_user2.php");
	} else {
		header("location:index.php?pesan=gagal");
	}	
} else {
	header("location:index.php?pesan=gagal");
}
?>