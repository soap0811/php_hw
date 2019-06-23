
<?php
$arr=['welcome','go','hello','end'];
function getMaxStringFromArray(array $array)
{
    $lengthArr = array_map('strlen', $array);
    $arr = array_combine($array, $lengthArr);
    $max = max(array_values($arr));
    $key = array_search($max, $arr);

    return 'Самая длинная строка - ' . $key . '. ЕЕ длинна - ' . $max . ' символ.';
}

echo getMaxStringFromArray($arr);
