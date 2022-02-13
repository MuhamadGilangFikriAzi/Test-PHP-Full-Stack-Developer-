<?php

$step = trim(fgets(STDIN));
$badIndex = trim(fgets(STDIN));

echo ''.PHP_EOL;
echo maxIndex($step, $badIndex).PHP_EOL;

function maxIndex($step, $badIndex){
    $maxIndex = 0;
    for ($i=1; $i <= $step; $i++) { 
        $maxIndex += $i;
    }

    $curentIndex = $maxIndex;
    $n = $step;

    while(1){
        while($curentIndex > 0 && $n > 0){
            $curentIndex -= $n;

            if($curentIndex == $badIndex){
                $curentIndex += $n;
            }

            $n--;
        }

        if($curentIndex <= 0){
            return $maxIndex;
            break;
        }else{
            $n = $step;
            $curentIndex = $maxIndex - 1;
            $maxIndex--;

            if($curentIndex == $badIndex){
                $curentIndex = $maxIndex - 1;
                $maxIndex--;
            }
        }
    }
}