<?php
	$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

	echo "Data sebelum disorting :"; echo "<br>";
	for($i=0; $i<7; $i++) {
		echo $data[$i];
		echo "<br>";
	}

	echo "<br><br>";

	sort($data);
	echo "Data setelah disorting :"; echo "<br>";
	for($i=0; $i<7; $i++) {
		echo $data[$i];
		echo "<br>";
	}
?>