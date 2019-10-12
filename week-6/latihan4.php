<?php
	echo "Bilangan Prima dari 1-37 adalah : ";
	for($i=1; $i<=37; $i++) {
		$a=0;
		for($k=1; $k<=$i; $k++) {
			if($i % $k == 0) $a++;
		}
		if($a==2) {
			echo "$i, ";
		}
	}
?>