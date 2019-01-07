
<?php
//str_ireplace   function
if(isset( $_POST['user_input'])&& !empty($_POST['user_input']))
{
    $find=array('azizul','ashik','amit');
    $replace=array('a***l','a***k','a***t');
    $user_input=$_POST['user_input'];
    echo $new_user_input=str_ireplace($find,$replace,$user_input);

}
//output:a***l is a good boy Azizul is a good boy
?>
<hr>
<form action="index.php" method="POST">
    <textarea name="user_input" rows="6" cols="30"><?php echo  $user_input ?></textarea><br><br>
    <input type="submit" value="Submit">
</form>


