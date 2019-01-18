<?php
//server variables for script name(2)
$server_name=$_SERVER['SCRIPT_NAME'];
?>
<form action="<?php echo $server_name; ?>"  method= "POST" >
    <input type="submit" name="submit" value="Submit">
</form>