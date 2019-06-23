<?php
$arr = [1,2,3,4,5];
function getMaxNumberFromArray(array $arr)
{
    for ($i = 0; $i < count($arr); $i++){
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }

    return end($arr);
}
 

