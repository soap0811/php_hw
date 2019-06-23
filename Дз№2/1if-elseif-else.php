<?php
$t = date("H");

if ($t < "10") {
   echo "Доброе утро!";
}elseif ($t<18) {
    echo "Добрый день";
}elseif ($t<23) {
    echo "Добрый вечер";

}else {
    echo "Спокойной ночи!";
}
?>