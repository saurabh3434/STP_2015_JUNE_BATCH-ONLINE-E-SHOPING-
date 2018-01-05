<?php
$link=$mysql_hostname="localhost";
$user=$mysql_user="root";
$pass=$mysql_password="";
$dr=$mysql_database="items";
$prefix="";
$bd=mysql_connect($link,$user,$pass) or die("Could not connect database");
mysql_select_db($dr,$bd) or die("ccould not select database"); 
?>