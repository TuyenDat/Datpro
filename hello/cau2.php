<?php
	$temp = 0;
	$number = array(1,2,3,4,5,6,7,8,9);
	for ($i = 0; $i < 9; $i++) { 
		for ($j = $i + 1; $j < 9; $j++) { 
			if($number[$i] < $number[$j])
			{
				$temp = $number[$i];
				$number[$i] = $number[$j];
				$number[$j] = $temp;
			}
		}
	}
	echo "mang sau khi khi sap xep giam dan : ";
	foreach ($number as $value) {
		
		echo $value;
	}
?>
