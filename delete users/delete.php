<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM signup");
?>

<!DOCTYPE html>
<html>
<head>
<style>
h1{
	text-align:center;
}
table{
	border-collapse:collapse;
	width:100%;
	color:black;
	font-family:monospace;
	font-size:17px;
	text-align:left;
}
th{
	background-color:black;
	color:white;
}
tr:nth-child(even){
	background-color:#f2f2f2;
}
td a{
	text-decoration:none;
	color:white;
}
td button{
	background-color:black;
}
td button:hover{
	background-color:white;
	
}
td a:hover{
	color:black;
}
	
</style>

<title>Delete employee data</title>
</head>
<body>
<h1>DELETE USERS</h1>
<table align="center">
	
	<t>
	<th>User name</th>
	<th>email</th>
	<th>phoneno</th>
	<th>password</th>
	<th>Status</th>
	</t>
	<?php
	$i=0;
	while($rows = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	
	
	<td><?php echo $rows['username']; ?></td>
	<td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['phoneno']; ?></td>
	<td><?php echo $rows['password']; ?></td>
	<td><button><a href="delete-process.php?username=<?php echo $rows["username"]; ?>">Delete</a></button></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>