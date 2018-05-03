<?php 
	include 'config/connectdb.php';
	// $sql = "SELECT * FROM users WHERE id>='3' and id <='8'  and fullname LIKE  '%สมคิด%' ORDER BY id DESC";
	 $sql = "SELECT * FROM users ORDER BY id DESC";
	$result = mysqli_query($connect,$sql);

	
 ?>

<table class="table table-striped table-inverse table-hover">
	<thead>
		<tr class="bg-primary">
			<th>ID</th>
			<th>Fullname</th>
			<th>Email</th>
			<th>Tel</th>
			<th>Manage</th>
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
				<td><button id="btndelete" class="btn btn-danger" data-id="<?php echo $data['id']; ?>">Delete</button></td>
			</tr>
		<?php 
			}
		 ?>
	</tbody>
</table>