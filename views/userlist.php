<?php 

	require_once('../php/functions.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>User ID</th>
			<th>UserName</th>
			<th>Password</th>
			<th>Email</th>
			<th>Type</th> 
			<th colspan="2">Action</th> 
		</tr>
		
		<?php 
			$result = userView();
			while ($rows = mysqli_fetch_assoc($result)) {
			
		?>
		<tr align="center">
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['type']; ?></td>
			<td><a href="updateuser.php?id=<?php echo $rows['id'];?>">Edit</a></td>
			<td><a href="../php/deleteuser.php?id=<?php echo $rows['id'];?>">Delete</a></td>
		</tr>
		<?php 
			}
		 ?>

	</table>
</body>
</html>