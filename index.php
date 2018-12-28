<?php
/* switch loop operation*/
$var="friday";
switch($var)
{
    case "friday":
    case "saturday":
        echo "It is weekend";
        break;
    default:
        echo "It is working day";
}