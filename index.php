<?php
$arr=array("meat"=>array("chicken","beef","mutton"),"vegetable"=>array("tomato","carrot"));
foreach ($arr as $meat=>$veg)
{
    echo "<strong>".$meat."</strong><br>";
    foreach ($veg as $vegetable)
    {
        echo $vegetable."<br>";
    }
}
