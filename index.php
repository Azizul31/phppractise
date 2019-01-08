
<?php
//find and replace application
if(isset($_POST["user_input"]) && !empty($_POST["user_input"]))
{
    echo $text=$_POST["user_input"];
    echo $find=$_POST["searchfor"];
    echo $replace=$_POST["replacewith"];
}

?>
<hr>
<form action="index.php" method="POST">
    <textarea name="user_input" rows="6" cols="30"></textarea><br><br>
Search for:  <input type="text" name="searchfor"><br><br>
    Replace with:<input type="text" name="replacewith"><br><br> <input type="submit" value="Submit"><br><br>
</form>


