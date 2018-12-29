<?php
/*welcome to function*/
$num1=10;$num2=11;
function addResult()
{   global $num1,$num2;
    $num3=$num1+$num2;
    return $num3;
}
echo addResult();