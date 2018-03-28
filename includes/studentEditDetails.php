<?php
session_start();
require_once '..\includes\connect.php';
$usn=$_SESSION["usn"];

if (isset($_POST['update']))
{
	
	$sq=$_POST['securityQuestion'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$sa=$_POST['securityAnswer'];
	
	$sql="update student set email='$email',phone='$phone',securityQuestion='$sq',securityAnswer='$sa' where usn='$usn';";
	if ($conn->query($sql) === TRUE) {
    	header("Location: ../student/dashboard.php");
	}
 	else {
    echo "Error updating record: " . $conn->error;
    header("Location: ../student/login.php");
	}

} 
if (isset($_POST['back']))
{
	 header("Location: ../student/dashboard.php");
} 

 
?>