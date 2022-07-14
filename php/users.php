<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>

<body>
<?php 
require_once 'connect_db.php';
echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM users WHERE user_id=" . $_POST['userID'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM users";
$result = $connect->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
	<h2>List of all Users</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>customerID</td>
			<td>customeName</td>
			<td>customerAddress</td>
			<td>tel</td>
			<td>mobile</td>
			<td>email</td>
			<td>userName</td>
			<td>password</td>
			<td></td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['user_ID']."' name='userID' />"; //added
		echo "<tr>";
		echo "<td>".$row['customerID'] . "</td>";
		echo "<td>".$row['customerName'] . "</td>";
		echo "<td>".$row['customerAddress'] . "</td>";
		echo "<td>".$row['tel'] . "</td>";
		echo "<td>".$row['mobile'] . "</td>";
		echo "<td>".$row['email'] . "</td>";
		echo "<td>".$row['userName'] . "</td>";
		echo "<td>".$row['password'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>
<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 
</div>


Edit.php

<?php 
require_once 'connect.php';
?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['firstname']) || empty($_POST['lastname']) || 
			empty($_POST['address']) || empty($_POST['contact']) )
		{
			echo "Please fillout all required fields"; 
		}else{		
			$firstname  = $_POST['firstname'];
			$lastname 	= $_POST['lastname'];
			$address 	= $_POST['address'];
			$contact  	= $_POST['contact'];
			$sql = "UPDATE users SET firstname='{$firstname}', lastname = '{$lastname}',
						address = '{$address}', contact = '{$contact}' 
						WHERE user_id=" . $_POST['userid'];

			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM users WHERE user_id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['user_ID']; ?>" name="userId">
				<label for="customeName">CustomerName</label>
				<input type="text" id=""  name="customeName" value="<?php echo $row['customerAddress']; ?>" class="form-control"><br>
				<label for="customerAddress">Address</label>
				<input type="text"  name="customerAddress" id="customerAddress" value="<?php echo $row['customeName']; ?>" class="form-control"><br>
				<label for="address">Address</label>
				<textarea rows="4" name="address" class="form-control"><?php echo $row['address']; ?></textarea><br>
				<label for="contact">Contact</label> 
				<input type="text"  name="contact" id="contact"  value="<?php echo $row['contact']; ?>" class="form-control"><br>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

</body>
</html>