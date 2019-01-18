<?php ob_start();?>
    <h1>My page</h1>
    This is my page
<?php
//ob_start and ob_end_flush function
$reference_page='https://www.youtube.com';
$reference=true;
if($reference==true)
{
    header('Location:'.$reference_page);
}
ob_end_flush();
?>