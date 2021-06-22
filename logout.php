<?php
session_start();

if(isset($_POST['save']))
{
session_destroy();
header('location:restaurant.html');
}
?>
