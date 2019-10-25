<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<h2>Form</h2><br>
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<div class="col-md-5">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" name="nama" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Alamat :</label>
				<input type="text" name="alamat" class="form-control">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin :</label>
				<input type="radio" name="jenis_kelamin" value="laki-laki" checked /> Laki - Laki
				<input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan
			</div>
			<div class="form-group">
				<label>Golongan Darah :</label>
				<select name="goldar">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="AB">AB</option>
					<option value="O">O</option>
				</select>
			</div>
			<div class="form-group">
				<label>Hobby :</label><br>
				<input type="checkbox" name="hobi" value="Sepakbola">Sepakbola
				<input type="checkbox" name="hobi" value="Membaca Buku">Membaca Buku
				<input type="checkbox" name="hobi" value="Berenang">Berenang
				<input type="checkbox" name="hobi" value="Bola Voli">Bola Voli
			</div>
			<div class="form-group">
				<label>Keterangan :</label>
				<textarea name="keterangan" class="form-control"></textarea>
			</div>
			<button type="submit" name="kirim" class="btn btn-primary">Simpan</button>
		</form>
	</div><br><br>

<?php
	if(isset($_POST['kirim'])) {
		include('TM_7hasil.php');
	}
?>
</body>
</html>