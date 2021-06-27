<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'web technology');
$name = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phoneno'];
$password = $_POST['password'];
$s = "select * from signup where email = '$email'";
$result = mysqli_query($con,$s);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$num = mysqli_num_rows($result);
   if($num == 1){
      echo '<script>alert("email already exisis")</script>' ; 
    }
   else{
      $reg = "insert into signup(username,email,phoneno,password)values('$name','$email','$phonenumber','$password')";
      mysqli_query($con,$reg);
      echo '<script>alert("Registration successful")</script>' ; 

    }
 ?>
 