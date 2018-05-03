<?php 

$host = "localhost";
$user_db = "root";
$pass_db = "1234";
$db_name = "ajaxdb";

$connect = mysqli_connect($host,$user_db,$pass_db,$db_name);
mysqli_set_charset($connect,"utf8");

if($connect){
	//echo "Connect database success";
}else{
	echo "Connect database fail!!!!!";
}

?>