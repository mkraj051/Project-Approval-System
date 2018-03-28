<?php
session_start();
require_once '..\includes\connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" href="..\css\bootstrap.min.css">
	<script src="..\scripts\bootstrap.min.js"></script>
	<script src="..\scripts\jquery.min.js"></script>
</head>
<body>
	<br>
	<div class="container ">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<!--div class="panel-title">Student Dashboard</div-->
					<center><h1>Student Dashboard</h1></center>
					<br>
						<ul>
							<?php
								#echo $_SESSION['usn'];
								$usn=$_SESSION['usn'];
								$sql="select * from student where usn='$usn';";
								$result = $conn->query($sql);
								if ($row = $result->fetch_assoc())
								{ 
									$name=$row['name'];
									$email=$row['email'];
									$phone=$row['phone'];
									$branch=$row['branch'];
									$sem=$row['sem'];
									$batch=$row['batch'];
								}
							?>
							<pre>
							<li>usn   :<?php echo $usn ?></li>
							<li>Name  :<?php echo $name ?></li>
							<li>Email :<?php echo $email ?></li>
							<li>phone :<?php echo $phone ?></li>
							<li>branch:<?php echo $branch ?></li>
							<li>sem:<?php echo $sem ?></li>
							<li>batch:<?php echo $batch ?></li>
							</pre>
						</ul>
					<form action="..\includes\studentDashboard.php" method="post">
						<center>
							<button type="submit" class="btn btn-primary" name="createTeam">Create Team</button>
							<button type="submit" class="btn btn-primary" name="joinTeam">Join Team</button>
							<button type="submit" class="btn btn-primary" name="viewProjects">View Projects</button>
							<button type="submit" class="btn btn-primary" name="editDetails">Edit Details</button>
							<button type="submit" class="btn btn-primary" name="logout">Logout</button>
						</center>
						<!--input action="submit" value="createTeam">
						<input action="submit" value="joinTeam">
						<input action="submit" value="viewProjects">
						<input action="submit" value="editDetails"-->
					</form>
					

				</div>

			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>
