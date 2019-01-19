<?php
//htmlentitites for security purpose
if((isset($_GET['day'])) && (isset($_GET['month'])) && (isset($_GET['year'])))
{
    $day=htmlentities($_GET['day']);
    $month=htmlentities($_GET['day']);
    $year=htmlentities($_GET['year']);
    if((!empty($_GET['day'])) && (!empty($_GET['month'])) && (!empty($_GET['year'])))
    {
        echo "The date is ".$day."st ".$month." ".$year;
    }
}
?>
<form action="index.php" method="GET">
    Day:<input type="text" name="day">
    Month:<input type="text" name="month">
    Year:<input type="text" name="year"><br>
    <input type="submit" value="Submit">
</form>
