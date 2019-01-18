<?php
require "conf.inc.php";
foreach ($ip_address_blocked as $ip) {
    {
        if ($ip == $ip_address) {
            die ('The ip address ' . $ip_address . ' has been blocked');
        }
    }
}


?>
<h1>Welcome to Bangladesh</h1>

