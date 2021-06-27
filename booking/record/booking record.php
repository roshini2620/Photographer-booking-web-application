<?php
include_once('connection.php');
$query = "select * from booking";
$result = mysql_query($query);
?>
<html>
<head>
<title>
</title>
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
</head>
<body>
    <table align="center">
	<h1>Booking Records</h1>
	<t>
	<th>User_name</th>
	<th>email</th>
	<th>date</th>
	<th>name_of_the_event</th>
	<th>address</th>
	<th>services</th>
	<th>package</th>
	
	</t>
	<?php
	  while($rows=mysql_fetch_assoc($result))
	  {
	?>
		  <tr>
		     <td><?php echo $rows['User_name']; ?></td>
			 <td><?php echo $rows['email']; ?></td>
			 <td><?php echo $rows['date']; ?></td>
			 <td><?php echo $rows['name_of_the_event']; ?></td>
			 <td><?php echo $rows['address']; ?></td>
			 <td><?php echo $rows['services']; ?></td>
			 <td><?php echo $rows['package']; ?></td>
			 
		  </tr>
	<?php
	  }
	  ?>
	</table>
</body>
</html>