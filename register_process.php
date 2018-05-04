<?php 
	include 'config/connectdb.php';

	// รับค่าจากฟอร์ม
	$fullname 	= $_POST['fullname'];
	$username 	= $_POST['username'];
	$password 	= password_hash($_POST['password'],PASSWORD_DEFAULT);
	$email 		= $_POST['email'];
	$tel 		= $_POST['tel'];

	// มีการอัพรูปเข้ามา
	if(!empty($_FILES['picprofile']['name']))
	{
		// เปลี่ยนชื่อรูปที่อัพโหลดเข้ามา
		$file_name  =  time().".".pathinfo($_FILES['picprofile']['name'], PATHINFO_EXTENSION);
		$file_temp 	= $_FILES['picprofile']['tmp_name'];

		move_uploaded_file($file_temp,'assets/Frontend/Images/member/'.$file_name);

		// if (password_verify($_POST['password'], $password)) {
		//     echo 'Pass';
		// } else {
		//     echo 'Invalid';
		// }

		//echo $password;

		// บันทึกลงฐานข้อมูล
		$sql = "INSERT INTO member(fullname,username,password,email,tel,picprofile,status)
			VAlUES('$fullname','$username','$password','$email','$tel','$file_name','1')";
		$query = mysqli_query($connect,$sql);

		if($query){
			echo "Insert data success";
		}else{
			echo "Insert data fail!!!";
		}
	}

 ?>