<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" href="..\css\bootstrap.min.css">
	<script src="..\scripts\bootstrap.min.js"></script>
	<script src="..\scripts\jquery.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Student Login</div>
					<form name="myForm" action="..\includes\studentLogin.php" method="POST">
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" class="form-control" name="usn" placeholder="USN">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<br>
						<button type="submit" class="btn btn-primary" name="submitStudentLogin">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>
