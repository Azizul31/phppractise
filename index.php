<?php
/*substr_replace() function*/
$string="I am Azizul hakim.I am a student.I am feeling good today";
$new_string=substr_replace($string,'Rabbis',5,6);
echo $new_string."<br>";
/*Output: I am Rabbis hakim.I am a student.I am feeling good today*/

/*str_replace() function*/
$string2="I am Azizul hakim.I am a student.I am feeling good today";
$to_change=array('Azizul','am','I');
$change=array('Shafiq and Habib','are','We');

$new_string1=str_replace($to_change,$change,$string2);
echo $new_string1;
/*Output:We are Shafiq and Habib hakim.We are a student.We are feeling good today*/
