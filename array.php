<?php
$arr = ['Даня', 'ваня', 'Катя'];
$count = 0;

foreach($arr as $value){
    if($value === mb_strtolower($value)){
        $count++;
    };
}

echo  $count;
?>