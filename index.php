<?php
//timestamps+strtotime
$time=time();
$date=date('d/m/y @h:i:s',strtotime('+2 years'));
echo 'the actual date is'.$date;