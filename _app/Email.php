<?php
namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email{
    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName){
        $this->mail = new PHPMailer(true);
        //Server settings
        $this->mail->SMTPDebug = $smtpDebug;//2;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = $host;//'mail.setparts.com.br';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = $user;//'contato@setparts.com.br';                     // SMTP username
        $this->mail->Password   = $pass;//'EoCe6s1b60@';                               // SMTP password
        $this->mail->SMTPSecure = $smtpSecure;//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = $port;//587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $this->mail->Charset = 'utf-8';
        $this->mail->setLanguage('br');
        //Recipients
        $this->mail->setFrom($setFromEmail, $setFromName);//'contato@setparts.com.br', 'Mailer'
    }
    public function sendMail($subject, $body, $replyEmail,$replyName, $addressEmail, $addresName){
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = (string)$subject;
        $this->mail->addReplyTo($replyEmail,$replyName);
        $this->mail->addAddress($addressEmail,$addresName);
        try{
            $this->mail->send();
        }catch(Exception $e){
            echo "erro: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}