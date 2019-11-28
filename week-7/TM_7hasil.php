<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
	function cetakdata(){
		echo "<h2>Hasil Form</h2>";
		if(isset($_POST['kirim'])){
			$form=array("nm"=>$_POST['nama'], "almt"=>$_POST['alamat'], "jk"=>$_POST['jenis_kelamin'], "goldar"=>$_POST['goldar'], "hobi"=>$_POST['hobi'], "ket"=>$_POST['keterangan']);
		} ?>
		
		<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Golongan Darah</th>
					<th>Hobi</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr class="info">
					<?php foreach($form as $key => $value): ?>
						<td><?php echo $value; ?></td>
					<?php endforeach; ?>
				</tr>
			</tbody>
		</table>
		</div>
<?php	} 

	cetakdata();
?>

</body>
</html>