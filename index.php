
<?php
//find and replace application
$offset=0;
if(isset($_POST['user_input']) && isset($_POST['searchfor'])&&isset($_POST['replacewith']))
{
    $text=$_POST['user_input'];
    $search=$_POST['searchfor'];
    $replace=$_POST['replacewith'];
    $search_length=strlen($search);
    if(!empty($text)&& !empty($search)&& !empty($replace))
    {
        while($strpos=strpos($text,$search,$offset))
        {

            $offset=$strpos+$search_length;
           echo $text=substr_replace($text,$replace,$strpos,$search_length);

        }
        echo $text;
    }
    else{
        echo "Please input all the field";
    }
}

?>
<hr>
<form action="index.php" method="POST">
    <textarea name="user_input" rows="6" cols="30"></textarea><br><br>
Search for:  <input type="text" name="searchfor"><br><br>
    Replace with:<input type="text" name="replacewith"><br><br> <input type="submit" value="Submit"><br><br>
</form>


