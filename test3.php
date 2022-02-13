<?php

$n = trim(fgets(STDIN));
$arrTemp = [];
for ($i=0; $i < $n; $i++) { 
    $arrTemp[] = trim(fgets(STDIN));
}

echo "".PHP_EOL;
echo trailing($n, $arrTemp).PHP_EOL;

function trailing($n, $arr){
    $minTemp = $n;
    $maxTemp = 0;
    $min = 0;
    $max = 0;

    for ($i=1; $i < $n; $i++) { 
        $count = 0;
        for ($j=0; $j < $i; $j++) { 
            if($arr[$j] < $arr[$i]){
                $count++;
            }
        }

        if($count > $maxTemp && $count != 0){
            $maxTemp = $count;
            $max = $arr[$i];
        }

        if($count <= $minTemp){
            $minTemp = $count;
            $min = $arr[$i];
        }
    }
    
    $return = $minTemp == 0 && $maxTemp == 0 ? -1 : $max - $min;
    return $return;
}