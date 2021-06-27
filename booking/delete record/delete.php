<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM booking");
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
<h1>BOOKING RECORDS</h1>
<table align="center">
	
	<t>
	<th>User_name</th>
	<th>email</th>
	<th>date</th>
	<th>name_of_the_event</th>
	<th>address</th>
	<th>services</th>
	<th>package</th>
	<th>Action</th>
	</t>
	<?php
	$i=0;
	while($rows = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	
	
	<td><?php echo $rows['User_name']; ?></td>
	<td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['date']; ?></td>
	<td><?php echo $rows['name_of_the_event']; ?></td>
	<td><?php echo $rows['address']; ?></td>
	<td><?php echo $rows['services']; ?></td>
	<td><?php echo $rows['package']; ?></td>
	<td><button><a href="delete-process.php?User_name=<?php echo $rows["User_name"]; ?>">Delete</a></button></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>