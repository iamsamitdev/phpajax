<?php 
	include 'config/connectdb.php';

	// รับค่าจากฟอร์ม
	$fullname 	= $_POST['fullname'];
	$email 		= $_POST['email'];
	$tel 		= $_POST['tel'];

	$sql = "INSERT INTO users(fullname,email,tel) VALUES('$fullname','$email','$tel')";
	$result = mysqli_query($connect,$sql);

	if($result)
	{
		echo "บันทึกรายการเรียบร้อย"; 
	}else{
		echo "มีข้อผิดพลาด บันทึกรายการไม่ได้";
	}
 ?>