<?php 
	include 'config/connectdb.php';
	$sql = "SELECT * FROM users";
	$result = mysqli_query($connect,$sql);

	// echo $_SERVER['REMOTE_ADDR'];
 ?>

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