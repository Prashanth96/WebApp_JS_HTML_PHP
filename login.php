<?php
include 'db.php';

$emailid = $_REQUEST["emailid"];
$pass = $_REQUEST["pass"];

//echo "select student_email , student_password from student_details where student_email='$emailid'";
$query =mysqli_query($dbc, "select student_email , student_password from student_details where student_email='$emailid'");

$num = mysqli_num_rows($query);

if ($num==1)
{
	$row = mysqli_fetch_assoc($query);
	$password = $row['student_password'];
	
	if ($password == $pass)
	{
		echo "success";
	}
	else{
	echo "Password missmatch";
	
	// echo $pass.' '.$password.' '.$emailid;
	}
}
else
{
	// echo $pass.' '.$password.' '.$emailid;
	echo "No Account with these cradentials";
}
?>