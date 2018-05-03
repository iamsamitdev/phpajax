<?php 
	include 'config/connectdb.php';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($connect,$sql);

	// echo $_SERVER['REMOTE_ADDR'];
 ?>

 <!doctype html>
 <html>
     <head>
         <meta charset="utf-8">
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Show Users</title>
         <link rel="stylesheet" href="assets/Global/lib/bootstrap/css/bootstrap.min.css">
         <link rel="stylesheet" href="assets/Frontend/fonts/css/fontawesome-all.min.css">
         <link rel="stylesheet" type="text/css" href="assets/Frontend/css/custom.css">
     </head>
     <body>

	<div class="jumbotron">
		<h1 class="display-3">Show Users</h1>
		<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	</div>


	<div class="container">
		<div class="row">
			<table class="table table-striped table-inverse table-hover">
				<thead>
					<tr class="bg-primary">
						<th>ID</th>
						<th>Fullname</th>
						<th>Email</th>
						<th>Tel</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($data = mysqli_fetch_assoc($result))
						{
					 ?>
						<tr>
							<td><?php echo $data['id']; ?></td>
							<td><?php echo $data['fullname']; ?></td>
							<td><?php echo $data['email']; ?></td>
							<td><?php echo $data['tel']; ?></td>
						</tr>
					<?php 
						}
					 ?>
				</tbody>
			</table>
		</div>
	</div>
         
        <script src="assets/Global/lib/jquery/jquery-3.3.1.min.js"></script>
        <script src="assets/Global/lib/bootstrap/js/bootstrap.min.js"></script>
      </body>
 </html>