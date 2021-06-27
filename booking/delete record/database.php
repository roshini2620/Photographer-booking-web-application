<?php
$host='localhost';
$username='root';
$password='';
$conn=mysqli_connect($host,$username,$password,"web technology");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>
