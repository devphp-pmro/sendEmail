<?php


namespace Source\_App;


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Email
{
    private $email;

    public function __set($name, $value)
    {
        $this->$name = $value;
        // TODO: Implement __set() method.
    }
    public function __get($name)
    {
        return $this->name;
        // TODO: Implement __get() method.
    }

    public function __construct($host,$userName,$password,$stmpSecure, $port, $smtpDebug = array("false"=>0,"true"=>SMTP::DEBUG_SERVER))
    {
        $this->email = new PHPMailer(true);
        $this->email->SMTPDebug = $smtpDebug;                        // Enable verbose debug output
        $this->email->isSMTP();                                      // Send using SMTP
        $this->email->Host       = $host;                            // Set the SMTP server to send through
        $this->email->isHTML(true);
        $this->email->SMTPAuth   = true;                        // Enable SMTP authentication
        $this->email->Username   = $userName;                     // SMTP username
        $this->email->Password   = $password;                               // SMTP password
        $this->email->SMTPSecure = $stmpSecure;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->email->Port       = (int) $port;
        $this->email->setLanguage('br');
        $this->email->CharSet = 'utf-8';

    }

    function sendEmail($setEmailFrom,$setName,$setEmailTo,$nameTo,$subject,$body,$replyTo = null,$attachment = null)
    {
        $this->email->setFrom($setEmailFrom,$setName);
        $this->email->addAddress($setEmailTo,$nameTo);
        $this->email->Subject = (string) $subject;
        $this->email->Body = $body;
        $this->email->addReplyTo($replyTo);
        $this->email->addAttachment($attachment);
        try {
            $this->email->send();
            echo "<script>
                    window.alert('Email enviado com sucesso');
                 </script>";
        } catch (Exception $e){
            echo "erro ao enviar email: {$this->email->ErrorInfo} {$e->getMessage()}";
        }
    }
}