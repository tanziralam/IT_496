<?php
$database= new mysqli("localhost","root","","Store");

if($database->connect_errno){
    die("Please contact your system administrator");
}
?>

