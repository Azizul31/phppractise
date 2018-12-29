<?php
$string="I am Azizul & hakim .";
$string2="I am Zahir & hasib";
similar_text($string,$string2,$result);
$string_word_count=str_word_count($string,1,'.');
$string_half=str_shuffle($string);
$substr=substr($string,0,6);
$string_reversed=strrev($string);
echo $result."<br>";
print_r($string_word_count);
echo $string_half;
echo strlen($string);
echo $string_reversed;
