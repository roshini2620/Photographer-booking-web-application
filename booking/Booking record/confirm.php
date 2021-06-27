<?php 
$conn=mysqli_connect("localhost", "root","","web technology");
   
if(isset($_POST['confirm']))
{
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "ur mail id"; // Your mail
    $mail->Password = ''; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom("ur mail id");
    $sql = "SELECT FROM booking WHERE email='" . $_GET["email"] . "'";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
	
	$mail->addReplyTo("roshininb2000@gmail.com");
	
    $mail->isHTML(true);
    $mail->Subject='Booking confirmation';
    $mail->Body='<h3>hiiii</h3>';
    if(!$mail->send())
    {
		echo '<script>alert("some problem occurs")</script>'; 
        
    }
    else 
    {
		echo '<script>alert("Thank you,keep in touch with us")</script>'; 
    }

}
}




?>