<?php
//explode function with file handling example
$handle=fopen('names.txt','r');
$read=fread($handle,filesize('names.txt'));
$names_array=explode(',',$read);
foreach ($names_array as $names)
{
    echo $names.'<br>';
}