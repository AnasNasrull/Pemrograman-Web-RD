<?php
function swap(&$a, &$b) {
	$temp = $a;
	$a = $b;
	$b = $temp;
}

$x = 9;
$y = 5;

swap($x, $y);
echo "Hasil swap x=9 dengan y=5 adalah x=$x, y=$y";
?>