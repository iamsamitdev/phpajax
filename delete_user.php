<?php 
	include 'config/connectdb.php';

	$delid = $_POST['delid'];

	$sql = "DELETE FROM users WHERE id='$delid'";
	mysqli_query($connect,$sql);	
 ?>
