<?php 

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
// отдельный пароль: LwbuzRLAoGne447Jpqtr
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'goodpipe74@mail.ru';                 // Наш логин
$mail->Password = 'LwbuzRLAoGne447Jpqtr';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('goodpipe74@mail.ru', 'Хорошие Трубы');   // От кого письмо 
$mail->addAddress('mail@goodpipe74.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'новая заявка с сайта';
$mail->Body    = '
	Пользователь оставил заказ <br> 
	Имя: ' . $name . ' <br>
	Телефон: ' . $phone . ' <br>
	Сообщение: <br> ' . $message . '';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    header('location: ../oops.php');
} else {
    header('location: ../thankyou.php');
}

?>