<?php
function fopen = file("counter.txt"); {
    while (! feof($file)) {
        
        $s = fgets($file);
        echo $s;
    }
    
    fclose($file);
    // строка, которую будем записывать
$text = "Какой-то текст";
 
// открываем файл, если файл не существует,
//делается попытка создать его
$fp = fopen("file.txt", "w");
 
// записываем в файл текст

while (! feof($text)){ 
    $str = fgets($text); 
    $num_str += 1; 
    if (! ($num_str % 2)){ 
     $result .= $str ; 
     fwrite($fp, $text);
    } 
   }
 
// закрываем
fclose($fp);