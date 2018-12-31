<?php
/* preg_match */
$string="Hello havesomefoods!";
function has_space($string)
{
    if (preg_match('/ /', $string)) {
        return true;
    } else return false;
}
if(has_space($string))
{
    echo "Have space.";
}
else echo "No space";