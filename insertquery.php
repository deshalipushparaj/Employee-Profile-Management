<html>
<head>
<title>INSERTED EMPLOYEE DETAILS</title>
</head>
<body bgcolor="black">
<font color="white">


<?php
$mysqlport = getenv('S2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die ('Connection failed');
mysql_select_db("employee_profile");

$emp_name = $_POST["name"];
$gend = $_POST["gender"];
$emp_id = $_POST["id"];
$birth = $_POST["dob"];
$posting = $_POST["design"];
$join=$_POST["join"];
$leave=$_POST["leave"];
$qualify=$_POST["quali"];
$address=$_POST["add"];
$phone=$_POST["phno"];
$native=$_POST["nativity"];
$insert_query = "insert into details(emp_name,gender,emp_id,designation,date_of_birth,d_join,d_leave,qualification,address,ph_number,nativity)values('$emp_name','$gend','$emp_id','$birth','$posting','$join','$leave','$qualify','$address','$phone','$native')";


if($emp_name== NULL OR $gend == NULL OR $emp_id == NULL OR $birth == NULL OR $posting == NULL OR $join==NULL OR $leave=NULL OR $qualify=NULL OR $address=NULL OR $phone=NULL OR $native=NULL)
	die('Please enter values for all the fields');
	
	else
	{
	if (!mysql_query($insert_query,$conn))
  	{
	  die('Error: ' . mysql_error());
  	}
	else
		echo "New Record is inserted Successfully!!";
	}

mysql_close($conn);
?><br>
<form action="home.html">
<input type=submit name=home value="HOMEPAGE"></FORM>
</font>
</body>
</html>

