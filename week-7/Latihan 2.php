<?php
function harga($nama, $color="red") {
	$panjang = strlen($nama);
	if($panjang<=10) {
		$harga = 300 * $panjang;
	} else if($panjang<=20) {
		$harga = 500 * $panjang;
	} else {
		$harga = 700 * $panjang;
	}
	echo '<font color="'.$color.'">'.$nama.' dengan harga total = '.$harga.'</font><br>';
}

harga('ZXCVBNM', 'blue');
harga('plmnjk');
harga('qwertyuiop', 'green');

?>