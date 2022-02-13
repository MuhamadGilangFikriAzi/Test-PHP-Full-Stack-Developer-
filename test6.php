<?php

$left = (int) trim(fgets(STDIN));
$right = (int) trim(fgets(STDIN));

$max = 0;

for ($i = $left; $i <= $right; $i++) {
	for ($j = ($i + 1); $j <= $right; $j++) {
		$result = $i ^ $j;
		if ($result > $max){
            $max = $result;
        }
			
	}
}

echo $max .PHP_EOL;