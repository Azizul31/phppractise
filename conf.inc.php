<?php
//ip address blocking method
$ip_address=$_SERVER['REMOTE_ADDR'];
$ip_address_blocked=array("::1","100.100.100.100");