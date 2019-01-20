<?php
//opendir and readdir file handling listening files
$directory="files";
if($handle=opendir($directory))
{
    echo "Looking inside \ ".$directory;
}
while($file=readdir($handle))
{
    if($file!="..")
    echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
}