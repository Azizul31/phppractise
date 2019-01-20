<?php
//random function
$image="image.jpg";
$enc=rand(1000,999).md5($image).rand(1000,999);
echo $enc;
