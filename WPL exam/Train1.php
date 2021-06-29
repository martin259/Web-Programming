<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color:grey;
			font-size: 15px;
		}
		h1{
			font-family: arial;
			background-color: seagreen;
		}
		table{
			background-color: lightblue;
			font-size: 20px;
		}
	</style>
</head>
<body><center><h1><u>Railway Ticket Reservation</u></h1>
	<form action="t3.php" method="POST" name="form2"><table border='2' height="50%" width="50%">
		<tr><th>Train ID</th><th><input type="text" name="empid" id="empid" required></th></tr>
		<tr><th>Train Name</th><th><input type="text" name="empname" id="empname" required></th></tr>
		<tr><th>Date of Journey</th><th><input type="date" name="dob" id="dob" min="2000-01-01" max="2005-01-01" required></th></tr>
		<tr><th>Address</th><th><textarea rows="5" cols="25" name="address" required></textarea></th></tr>
		<tr><th>Phone no</th><th><input type="number" name="pno" id="pno" required></th></tr>
		<tr><th>Email</th><th><input type="text" name="email" id="email" required></th></tr>
		<tr><th>No. of Persons</th><th><input type="number" name="salary" id="salary" required></th></tr>
		<tr><th><input type="submit" name="s1" value="save" onclick="return validate()"></th><th><input type="submit" name="s2" value="show details"></th></tr></table></form></center>
		<script type="text/javascript">
			function validate()
			{
				var empid=document.getElementById("empid");
				var empname=document.getElementById("empname");
				var pno=document.getElementById("pno");
				var id=/^[0-9]+$/;
				var no=/^\d{10}$/;

				if(empid.value=="")
				{
					window.alert("Please enter a employee id");
					return false;
				}
				if(!(empid.value.match(id)))
				{
					window.alert("Please enter a valid employee id");
					return false;
				}
				if(!empname.value.match(/^[a-z A-Z]+$/))
				{
					window.alert("Please enter a valid employee name");
					return false;
				}
				if(!pno.value.match(no))
				{
					window.alert("Please enter a valid phone number");
					return false;
				}
				if(email.value.indexOf("@",0,".")<0)
				{
					window.alert("Please enter a valid email id");
					return false;
				}
				return true;

			}
		</script>

</body>
</html>