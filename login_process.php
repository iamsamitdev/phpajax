<?php 
	include 'config/connectdb.php';

	// รับค่าจากฟอร์ม
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];

	$sql = "SELECT username,password FROM member 
	            WHERE username='$username'";
	$result = mysqli_query($connect,$sql);
	$data = mysqli_fetch_assoc($result);

	if (password_verify($password, $data['password'])) 
	{
		echo "login success";
	}else{
		echo "login fail";
	}

?>