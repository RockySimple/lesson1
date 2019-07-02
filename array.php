<?php
$arr = ['Даня', 'Ваня', 'Катя'];
$text = 'даня даня даня Даня Даня Даня ваня ваня Ваня Катя катя';

foreach($arr as $value){
    $value = mb_strtolower($value);
    echo substr_count($text, $value);
    echo '<br/>';
}
?>
