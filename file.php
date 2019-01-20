<?php
//file_exsists()
$filename='azizul.txt';
if(file_exists($filename))
{
    echo "File already exsists";

}
else
{
    $handle=fopen($filename,'w');
    fwrite($handle,"Nothing");
    fclose($handle);
}
