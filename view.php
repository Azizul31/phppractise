<?php
include "set.php";
if(isset($_SESSION['username']))
{
    echo "Welcome ".$_SESSION['username'];
}
else echo "Please log in first";