<?php
session_start();
$usn=$_SESSION['usn'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Team</title>
	<link rel="stylesheet" href="..\css\bootstrap.min.css">
	<script src="..\scripts\bootstrap.min.js"></script>
	<script src="..\scripts\jquery.min.js"></script>

	<style type='text/css'>    
  		table{ border-collapse: separate; }
  		table td { border-spacing: 1em; }
	</style>
</head>
<body>
	<br>
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<!--div class="panel-title">Create Your Team!!</div-->
					<center><h3>Create Your Team!!</h3></center>
					<form action='..\includes\studentCreateTeam.php' method='POST'>
						<table>
							<tr>
								<td>Team Name:</td>
								<td><input type='text' name='teamName'></td>
							</tr>
						</table>
						<br>
						<center><h5>Add Team Members</h5></center>
						<table>
							<tr>
								<td>Member1 Usn:</td>
								<td><input type='text' name='member1Usn' value=<?php echo $usn ?>></td>
						
							</tr>

							<tr>
								<td>Member2 Usn:</td>
								<td><input type='<text' name='member2Usn'></td>

							</tr>

							<tr>
								<td>Member3 Usn:</td>
								<td><input type='text' name='member3Usn' ></td>
							</tr>

							<tr>
								<td>Member4 Usn:</td>
								<td><input type='text' name='member4Usn'></td>
							</tr>
						</table>
						<br>
						<br>
						<center>
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
							<button type="submit" class="btn btn-primary" name="backed">Back</button>
						</center>
					</form>

				</div>
			</div>
		</div>
	<div class="col-md-3"></div>
	</div>
</body>
</html>