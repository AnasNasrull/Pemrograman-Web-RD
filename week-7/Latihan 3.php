<?php
function faktorial($A) {
	$total=1;
	if($A==1) {
		echo "Faktorial dari $A adalah " .$A;
	} else {
		echo "Faktorial dari $A adalah ";
		for($i=$A; $i>1; $i--) {
			echo $i ."*";
			$total = $total * $i;
		}
		echo "1 = ".$total."<br>";
	}
}

faktorial(5);
faktorial(8);
faktorial(6);
?>