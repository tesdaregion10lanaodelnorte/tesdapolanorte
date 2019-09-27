<?php
$connect = mysqli_connect("localhost","root","","tesdaDB");
if(!$connect){
	die("Database Connection Failed" . mysql_error($connect));
}
$myDB= mysqli_select_db($connect,'tesdaDB');
if(!$myDB){
	
	die("Database Connection Failed" . mysql_error($connect));

	}