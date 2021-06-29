<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
{
	echo"connection unsuccessful";
}
else
{
	$d="CREATE DATABASE train";
	if($cc->query($d)==true)
	{
		$cc=mysqli_connect("localhost","root","","train");
	}
	$s="CREATE TABLE ticket(trainid int PRIMARY KEY,trainname varchar(25) not null,dob date,address varchar(25) not null,pno bigint,email varchar(25),person bigint)";
	if($cc->query($s))
	{
		echo"table created";
	}

}
$cc->close();
?>