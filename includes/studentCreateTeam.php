<?php
session_start();
require_once '..\includes\connect.php';

if (isset($_POST['submit']))
{
	$team=$_POST['teamName'];
	$member1=$_POST['member1Usn'];
	$member2=$_POST['member2Usn'];
	$member3=$_POST['member3Usn'];
	$member4=$_POST['member4Usn'];
	echo $member1;

	#$sql = "INSERT INTO TeamRequest (member1, member2, member3) VALUES ('John', 'Doe', 'john@example.com')";
	$sql="INSERT INTO teamrequest (teamname,member1, member2, member3, member4, stat1, stat2, stat3, stat4) VALUES ('$team', '$member1', '$member2', '$member3', '$member4','1', '0', '0', '0')";

	if ($conn->query($sql) === TRUE)
	 	header("Location: ../student/dashboard.php");
	else
		echo "error";
} 
if (isset($_POST['backed']))
{
	 //session_unset();
	 header("Location: ../student/dashboard.php");
} 

?>