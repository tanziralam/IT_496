<?php
$database= new mysqli("localhost","root","","Generated");

if($database->connect_errno){
    die("Please contact your system administrator");
}
?>