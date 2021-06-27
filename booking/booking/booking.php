<?php
session_start();
	
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'web technology');

$username = $_POST['User_name'];
$email = $_POST['email'];
$date = $_POST['date'];
$name_of_the_event = $_POST['name_of_the_event'];
$address_of_the_event = $_POST['address'];
$services = $_POST['services'];
$package = $_POST['package'];



// Create connection

$s = "select * from booking where date = '$date'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
 	header('location:bexists.html');
 }

else{
$reg = "INSERT INTO booking (User_name, email, date, name_of_the_event, address, services, package)values ('$username','$email','$date','$name_of_the_event','$address_of_the_event', '$services', '$package')";
 mysqli_query($con,$reg);
 	header('location:success.html');
 }
 
?>