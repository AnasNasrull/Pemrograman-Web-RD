<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();

	if($_SESSION['role']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
	
	<h1>Halaman Admin</h1>

	<p>Halo <?php echo $_SESSION['username']; ?></p>
	<p>Anda telah login sebagai <?php echo $_SESSION['role']; ?></p>
	<a href="logout.php">LOGOUT</a>
</body>
</html>