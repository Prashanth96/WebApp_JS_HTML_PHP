<?php
include 'db.php';
/*$dbc = mysqli_connect('localhost','root','','student');
if(!$dbc)
{
	echo "error";
}*/

//echo "_SESSION['studentID']".$_SESSION['studentID'];
$spass = $_REQUEST["spass"];
$srepass = $_REQUEST["srepass"];
$student_id = $_SESSION['studentID']; 
// echo $spass.' '.$srepass;

if($spass==''&& $srepass==''){
	echo "Please Enter Password";
}
else if($spass==$srepass)
{
	$insertvalues = mysqli_query($dbc, "update student_details set student_password = '".$spass."' where student_id='".$student_id."'");
 //echo "Successfully Registered";
 echo "success";
	//echo "update student_details set student_password = '".$spass."' where student_id='".$student_id."'";
}else
{
	echo "Password mismatch";
}
//$insertvalues = mysqli_query($dbc, "update student_details set student_password = '".$spass."'");

?>