<?php
//file_delete and rename
/*$delete="filetodelete.txt";
if(@unlink($delete))
{
    echo "file deleted";

}
else
{
    echo "file not exsist ";
}
*/
$file="filetorename.txt";
$rename=rand(1000,9999);
    if(rename($file,$rename.'txt'))
    {
        echo "file renamed";
    }