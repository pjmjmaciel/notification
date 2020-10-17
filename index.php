<?php
require __DIR__ . '/lib_ext/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use Notification\Email;
$email = new PHPMailer();


$novoEmail = new Email;
$novoEmail->sendMail("assunto teste","<p>tests 123</p>","contato@setparts.com.br","paulo","pjmj.maciel@gmail.com","Paulo");
var_dump($novoEmail);