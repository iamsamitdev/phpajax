<?php 
	include 'config/connectdb.php';

	// รับค่าจากฟอร์ม
	$fullname 	= $_POST['fullname'];
	$email 		= $_POST['email'];
	$tel 		= $_POST['tel'];

	// echo $fullname;
	// echo $email;
	// echo $tel;

	// เช็คการ submit form
	if($_POST['submit'])
	{
		// เช็คว่ากรอกข้อมูลครบหรือไม่
		if(!empty($fullname) and !empty($email) and !empty($tel))
		{
			$sql = "INSERT INTO users(fullname,email,tel) VALUES('$fullname','$email','$tel')";
			$result = mysqli_query($connect,$sql);

			if($result)
			{
				echo "<script>alert('บันทึกรายการเรียบร้อย')</script>"; 
			}else{
				echo "<script>alert('มีข้อผิดพลาด บันทึกรายการไม่ได้')</script>";
			}
		}else{
			echo "<script>alert('กรอกข้อมูลให้ครบก่อน')</script>";
		}
	}

 ?>

 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Add Users</title>

         <link rel="stylesheet" href="assets/Global/lib/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="assets/Frontend/fonts/css/fontawesome-all.min.css">
         <link rel="stylesheet" type="text/css" href="assets/Frontend/css/custom.css">
  
     </head>
     <body>
         
	<div class="jumbotron">
		<h1 class="display-3">Add new user</h1>
		<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	</div>
        
        	<div class="container">
        		<div class="row">
        			<form method="post" action="add_user.php">
        				<div class="form-group row">
        					<label for="fullname" class="col-sm-12 form-control-label">Fullname</label>
        					<div class="col-sm-12">
        						<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname">
        					</div>
        				</div>
        				<div class="form-group row">
        					<label for="email" class="col-sm-12 form-control-label">Email</label>
        					<div class="col-sm-12">
        						<input type="text" class="form-control" id="email" name="email" placeholder="Email">
        					</div>
        				</div>
        				<div class="form-group row">
        					<label for="tel" class="col-sm-12 form-control-label">Tel</label>
        					<div class="col-sm-12">
        						<input type="text" class="form-control" id="tel" name="tel" placeholder="Tel">
        					</div>
        				</div>
    
        				<div class="form-group row">
        					<div class="col-sm-offset-12 col-sm-12">
        						<input type="submit" class="btn btn-primary" name="submit" value="Submit">
        					</div>
        				</div>
        			</form>
        		</div>
        	</div>

        <script src="assets/Global/lib/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/Global/lib/bootstrap/js/bootstrap.min.js"></script>
     </body>
 </html>