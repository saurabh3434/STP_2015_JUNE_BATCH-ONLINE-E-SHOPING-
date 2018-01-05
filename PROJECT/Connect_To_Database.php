<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="stp_2015"; 
if(@$link=mysql_connect($mysql_host,$mysql_user,$mysql_pass)){
	//echo "You Are Connected To ".$mysql_host.".<br>";
	if(mysql_select_db($mysql_db)){
		//echo "You Are Connected To ".$mysql_db." Database.<br>";
	}
	//else
		//echo"Failed to connect ".$mysql_db." Database";
}
//else
	//echo"Failed To Connect $mysql_host";
?>