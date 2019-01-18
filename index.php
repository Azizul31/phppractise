<?php
if((isset($_GET['day']))&& (isset($_GET['month'])) && (isset($_GET['year'])))
{
    $day=$_GET['day'];
    $month=$_GET['month'];
    $year=$_GET['year'];
    if(!empty($day) && !empty($month) && !empty($year))
    {
        echo "The date is ".$day." /".$month." /".$year." /";
    }
    else echo "Operation failed";
}?>
<form action="index.php" method="GET">
    Day:<br>
    <input type="text" name="day"><br>
    Month:<br>
    <input type="text" name="month"><br>
    Year:<br>
    <input type="text" name="year"><br>
    <input type="submit" value="Submit"><br>
</form>
