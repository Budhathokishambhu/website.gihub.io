<?php 

require_once '../php/db_connect.php';

?>
<div class="container">
	<?php 
	
	if(isset($_POST['update'])){

		if( empty($_POST['customerName']) || empty($_POST['customerAddress']) || 
			empty($_POST['tel']) || empty($_POST['mobile']) )
		{
			echo "Please fillout all required fields"; 
		}else{		
			$cname   = $_POST['cname'];
			$address = $_POST['address'];
			$tel 	 = $_POST['tel'];
			$mobile  = $_POST['mobile'];
			$sql = "UPDATE users SET customerName='{$cname}', customerAddress = '{$address}',
						tel = '{$tel}', mobile = '{$mobile}' 
						WHERE customerID=" . $_POST['cid'];

			if( $connect->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated  user</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>";
			}
		}
	}
	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM customer WHERE customerID={$id}";
	$result = $connect->query($sql);

	if($result->num_rows < 1){
		header('Location: users.php');
		exit;
	}
	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3> 
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['customerID']; ?>" name="cid">
				<label for="customername">Customer Name</label>
				<input type="text" id="cname"  name="cname" value="<?php echo $row['customerName']; ?>" class="form-control"><br>
				<label for="address">Address</label>
				<input type="text"  name="address" id="address" value="<?php echo $row['customerAddress']; ?>" class="form-control"><br>
				<label for="tel">Address</label>
				<textarea rows="4" name="tel" class="form-control"><?php echo $row['tel']; ?></textarea><br>
				<label for="mobile">Contact</label> 
				<input type="text"  name="mobile" id="mobile"  value="<?php echo $row['mobile']; ?>" class="form-control"><br>
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<?php