<?php

namespace core\traits;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

trait EmailsTrait
{
    public function sendEmail($from = '', $to = '', $subject = '', $body = '')
    {
        $email = new PHPMailer();

        try {

            $email->isSMTP();
            $email->SMTPAuth = true;
            $email->Host = '';
            $email->Username = '';
            $email->Password = '';
            $email->Port = 587;

            $email->setFrom($from);
            $email->addAddress($to);

            $email->isHTML(true);
            $email->Subject = $subject;
            $email->Body = $body;

            if ($email->send())
                return ['Status' => true, 'Mensagem' => 'Enviado com sucesso'];

        } catch (Exception $e) {
            return ['Status' => false, 'Mensagem' => $e->getMessage()];
        }
    }
}