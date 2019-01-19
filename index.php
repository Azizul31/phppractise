<?php
//post method
$match="pass123";
if(isset($_POST["password"]))
{
    if(!empty($_POST["password"]))
    {
        $password=$_POST["password"];
        if($password==$match) {
            echo "this is correct";
        }
        else echo "This is incorrect";
    }

}
?>
<form action="index.php" method="POST">
    PASSWORD:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>
