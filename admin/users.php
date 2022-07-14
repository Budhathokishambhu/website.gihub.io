<?php 

require_once '../php/db_connect.php';

echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM customer WHERE customerID=" . $_POST['cid'];
	if($connect->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete  user</div>";
	}
}

$sql 	= "SELECT * FROM customer";
$result = $connect->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
	<h2>List of all Users</h2>
	<table class="table table-bordered table-striped">
		<tr>
			<td>Customer Name</td>
			<td>Address</td>
			<td>Telephone</td>
			<td>Mobile</td>
			<td width="70px">Delete</td>
			<td width="70px">EDIT</td>
		</tr>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['customerID']."' name='cid' />"; //added
		echo "<tr>";
		echo "<td>".$row['customerName'] . "</td>";
		echo "<td>".$row['customerAddress'] . "</td>";
		echo "<td>".$row['tel'] . "</td>";
		echo "<td>".$row['mobile'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='edit.php?id=".$row['customerID']."' class='btn btn-info'>Edit</a></td>";
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

<?php