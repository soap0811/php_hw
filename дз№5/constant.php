<?php 
 
define("CONST", 5); 
define("START", 1); 
define("END", 100); 
$coficient = 0; 
 
$a = range(START, END); 
foreach($a as $value){ 
 if(! ($value % CONST)){ 
  $cnt += 1; 
 } 
} 
echo $coficient . PHP_EOL;