<?php
//handling reading a file
if(isset($_POST['username']))
{
    $username=$_POST['username'];
    if(!empty($_POST['username']))
    {
        $handle=fopen('names.txt','a');
        fwrite($handle,$username."\n");
        fclose($handle);
        $readin=file("names.txt");
        $count=1;
        $read_count=count($readin);

        foreach ($readin as $fname)
        {
            echo trim($fname) ;
            if($read_count>$count)
            {
                echo '/';
            }
            $count++;

        }

    }
    else echo "Please type a name";
}
?>
<form action="file.php" method="POST">
    Username:<br>
    <input type="text" name="username"><br>
    <input type="submit" value="Submit">
</form>