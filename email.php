<?php
//print_r($_POST);die;

if(isset($_POST['submit'])){
require 'PHPMailer/PHPMailerAutoload.php';
$email="josephthomaa@gmail.com";
$name="Performant";
$subject = 'Enquiry from Perfosys Website';

$mail = new PHPMailer;

								//Enable SMTP debugging. 
								//$mail->SMTPDebug = 3;                               
								//Set PHPMailer to use SMTP.
								$mail->isSMTP();            
								//Set SMTP host name                          
								$mail->Host = "smtp.gmail.com";
								//Set this to true if SMTP host requires authentication to send email
								$mail->SMTPAuth = true;                          
								//Provide username and password     
								$mail->Username = "perfosys.performant@gmail.com";              
								$mail->Password = "perfosys";                           
								//If SMTP requires TLS encryption then set it
								$mail->SMTPSecure = "tls";                           
								//Set TCP port to connect to 
								$mail->Port = 587;                                   

								$mail->From = "perfosys.performant@gmail.com";
								$mail->FromName = "Performant";

								$mail->addAddress($email, $name);

								$mail->isHTML(true);

								$mail->Subject = $subject;
								
								$mail->Body = "<p>Subject : ".htmlspecialchars($_POST['subject'])."</p><p> Email : ".htmlspecialchars($_POST['email'])."</p><p> Contact Number : ".htmlspecialchars($_POST['contact-number'])."</p><p> Enquiry Type : ".htmlspecialchars($_POST['enquiry-select'])."</p><p> Enqury For : ".htmlspecialchars($_POST['enquiry2-select'])."</p><p> Message : ".htmlspecialchars($_POST['message'])."</p>";
								
								if(!$mail->send()) 
								{
									echo "<script>
				alert('Sorry , Please Try again!!');
				window.location='index.html';	

				</script>";

//header("location: EnpaqFin.html");
								} 
								else 
								{
								  echo "<script>alert('We have received your message, we will contact you soon !!');
								window.location='index.html';	
			</script>";
			//header("location: EnpaqFin.html");
								}





}
?>