<?php
require __DIR__ . '/../lib_ext/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use Notification\Email;
$email = new PHPMailer();


$novoEmail = new Email(2,'mail.setparts.com.br','contato@setparts.com.br','EoCe6s1b60@',PHPMailer::ENCRYPTION_STARTTLS,587,'contato@setparts.com.br','Mailer');
$novoEmail->sendMail("assunto teste","<p>tests 123</p>","contato@setparts.com.br","paulo","pjmj.maciel@gmail.com","Paulo");
var_dump($novoEmail);