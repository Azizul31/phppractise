<?php
$string="I am Azizul hakim.I am a student.I am feeling good today";
$find="am";
$i=0;
$find_length=strlen($find);
while($pos=strpos($string,$find,$i))
{

    echo $pos."<br>";
    $i=$pos+$find_length;
}
