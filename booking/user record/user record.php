<?php
include_once('connection.php');
$query = "select * from signup";
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
<h1>User Records</h1>
    <table align="center">
	<t>
	
	<th>username</th>
	<th>email</th>
	<th>phoneno</th>
	<th>password</th>
	
	</t>
	<?php
	  while($rows=mysql_fetch_assoc($result))
	  {
	?>
		  <tr>
		     
		     <td><?php echo $rows['username']; ?></td>
			 <td><?php echo $rows['email']; ?></td>
			 <td><?php echo $rows['phoneno']; ?></td>
			 <td><?php echo $rows['password']; ?></td>
		  </tr>
	<?php
	  }
	  ?>
	</table>
</body>
</html>