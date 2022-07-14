<?php
require_once 'dbconnect.php';


class functions{

	function checkReview($imageId,$userID){
		global $conn;
		$query = "SELECT travelpost.Title,travelpost.Message,travelpostimages.ImageID FROM travelpost join travelpostimages on travelpostimages.PostID = travelpost.PostID WHERE travelpostimages.PostID ='$userID'  AND md5(travelpostimages.ImageID)='$imageId'";

		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0){
			return false;
		}else{
			return true;
		}
	}




} 




?>