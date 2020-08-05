<?php

	$hostname="localhost"; //local server name default localhost
	$username="";  //mysql username default is root.
	$password="";       //blank if no password is set for mysql.
	$database="/Users/imac/Documents/Html/LDSounds/Users.db";  //database name which you created
	$connect= "mssql $hostname,$username,$password";
	if(! $con)
	{
	die('Connection Failed');
	}

	mysqli_select_db($database,$con);
	?>