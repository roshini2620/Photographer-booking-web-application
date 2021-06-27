<?php
session_start();
$con = mysqli_connect('localhost','root','sumo@1973');
mysqli_select_db($con,'web technology');
$name = $_POST['name'];
$password = $_POST['password'];
$s = "select * from adminlogin where name = '$name' && password = '$password'";
$result = mysqli_query($con,$s);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
          
    if($count == 1){  
            header('location:admin.html'); 
    }  
    else{  
            echo '<script>alert("Login failed. Invalid username or password.")</script>';  
    }     
 ?>