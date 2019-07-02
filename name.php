<?php

$text = 'Danil';
$text = strtolower($text);
$tex1 = 'gdagfhagsfgsa djsfa hasdf A fdsjf sdhf dsf';

for ($i = 0; $i < strlen($text); $i++) {
    $elem = substr($text, $i, 1);
    echo $elem.'='.substr_count($tex1, $elem).' ';

}





