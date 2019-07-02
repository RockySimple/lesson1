<?php
$text = 'lol lol lol lol lol lol lol lol lol lol lol lol lol lol lol lol lol lol
lol lol lol lol lol lol lol lol lol lol lol lol lol lol lol lol ';

if (strlen($text) > 50){
    $text = substr($text, 0, strrpos(substr($text, 0, 50), ' '));
}

echo $text;
