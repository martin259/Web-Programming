<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			font-size: 15px;
		}
		table{
			font-size: 20px;
		}
	</style>
</head>
<body>

</body>
</html>
<?php
$cc=mysqli_connect("localhost","root","","train");
if($cc->connect_error)
{
	echo"connection failed";
}
else
{
	if(isset($_POST['s1']))
	{
		$a=($_POST['trainid']);
		$b=($_POST['trainname']);
		$c=($_POST['dob']);
		$d=($_POST['address']);
		$e=($_POST['pno']);
		$f=($_POST['email']);
		$e=($_POST['perosn']);

     $q="INSERT INTO ticket values('$a','$b','$c','$d','$e','$f','$e')";
     if($cc->query($q))
     {
     	echo"details saved";

     }
     else
     {
     	echo"invalid entry";
     }
	}
	if(isset($_POST['s2']))
	{
		$sum=0;
		$sql="SELECT empid,empname,salary from ticket";
		$result=$cc->query($sql);
		echo"<center><br><br><br>";
		echo"<table border='1'><caption>LIST OF ENTRIES</caption><tr>
		<td>Employee ID</td>
		<td>Employee Name</td>
		
		
		<td>Salary</td></tr>";
		while($row=$result->fetch_assoc())
		{
			echo"<tr><td>".$row['trainid']."</td><td>".$row['trainname']."</td><td>".$row['person']."</td></tr>";
		}
		echo"</table>";
		echo"</center>";
		?>
		<a href="Train1.php">back</a>
		<?php

	}
}

$cc->close();
?>