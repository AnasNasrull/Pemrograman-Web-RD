<?php 
$koneksi = mysqli_connect("localhost","root","","praktikum9");

if(mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>