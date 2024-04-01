<?php
include ('smtp/PHPMailerAutoload.php');
$a="4Educshare@gmail.com";
$b=$_POST['subject'];
$c=$_POST['Commentaires'];
$frome=$_POST['Email'];
echo smtp_mailer($a,$b,$c);
function smtp_mailer($to,$subject,$msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "4EducShare@gmail.com";
	$mail->Password = "yerkqsoorettzszk";
	$mail->SetFrom("4EducShare@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress("$to");
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>