<?php
session_start();
require_once '..\includes\connect.php';

if (isset($_POST['createTeam']))
{
	 header("Location: ../student/createTeam.php");
} 
if (isset($_POST['joinTeam']))
{
	 header("Location: ../student/joinTeam.php");
} 
if (isset($_POST['viewProjects']))
{
	 header("Location: ../student/viewProjects.php");
} 
if (isset($_POST['editDetails']))
{
	 header("Location: ../student/editDetails.php");
} 
if (isset($_POST['logout']))
{
	 session_unset();
	 header("Location: ../student/login.php");
} 
 
?>