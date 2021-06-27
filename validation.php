<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'web technology');
$name = $_POST['username'];
$password = $_POST['password'];
$s = "select * from signup where username = '$name' && password = '$password'";
$result = mysqli_query($con,$s);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
          
    if($count == 1){  
            header('location:user.html'); 
    }  
    else{  
            echo '<script>alert("Login failed. Invalid username or password.")</script>';  
    }     
 ?>