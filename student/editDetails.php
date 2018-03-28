<?php
	session_start();
	require_once '..\includes\connect.php';
	$usn=$_SESSION['usn'];
	//echo $usn;
	$sql="select * from student where usn='$usn';";
	$result = $conn->query($sql);
	if ($row = $result->fetch_assoc())
		{ 
			$name=$row['name'];
			$email=$row['email'];
			$phone=$row['phone'];
			$sq=$row['securityQuestion'];
			$sa=$row['securityAnswer'];
			
		}
		//echo $email;
?>
<html>
	<head>
		<style>
			table, td, th {    
    			border: 1px solid #ddd;
    			text-align: left;
						}

			table {
    		border-collapse: collapse;
    		width: 100%;
						}	
			th, td {
    		padding: 15px;
			}

			div {
    			border-radius: 5px;
    			background-color: #f2f2f2;
    			padding: 20px;
			}
</style>
	</head>
	<body>
		<div>
			<center><h1>Edit Details</h1></center>
			<form action="..\includes\studentEditDetails.php" method="post">
				<table>
					<tr>
						<td>Email:</td>          
						<td><input type="email" name="email" value=<?php echo $email ;?>></td>
					</tr>
					<tr>
						<td>Phone:</td>          
						<td><input type="text" name="phone" value=<?php echo $phone ;?>></td>
					</tr>
					<tr>
						<td>securityQuestion:</td>
						<td>
						<select name="securityQuestion">
    						<option value="dob">Date Of Birth</option>
    						<option value="nickname">Your Nick Name</option>
   							<option value="First School">First School</option>
    						<option value="Favourite Food">Favourite Food </option>
  						</select>
  						</td>
					</tr>
					<tr>
						<td>securityAnswer:</td>
						<td><input type="password" name="securityAnswer" value=<?php echo $sa ;?>></td>
					</tr>
				</table>
				<center>
					<button type="submit" class="btn btn-primary" name="update">Update</button>
					<button type="submit" class="btn btn-primary" name="back">Back</button>
				</center>
			</form>
		</div>
	</body>
</html>
