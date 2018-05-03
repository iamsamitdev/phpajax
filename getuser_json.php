<?php 
	include 'config/connectdb.php';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($connect,$sql);

	while ($data = mysqli_fetch_assoc($result)) {
		$userArray[] = $data;
	}

	// echo "<pre>";
	// print_r($userArray);
	// echo "</pre>";

	// Convert to JSON
	echo json_encode($userArray);
 ?>
