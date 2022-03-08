<?php

namespace app\controllers\customs;

use app\models\EmailsEnviadosModel;
use core\Controller;

class CronController extends Controller
{
    public function index()
    {

    }

    public function emails()
    {
        $emailsEnviados = new EmailsEnviadosModel();
        $emailsEnviados = $emailsEnviados->where('Ativo', 1)->where('Status', 1)->get();

        foreach ($emailsEnviados as $key => $value) {
            $sendEmail = $this->sendEmail($value['Remetente'], $value['Destinatario'], $value['Assunto'], $value['Mensagem']);

            $emailEnviado = new EmailsEnviadosModel();
            $emailEnviado->where('Id', $value['Id'])->first();

            if ($sendEmail) {
                $emailEnviado->DataEnvio = date('Y-m-d H:i:s');
                $emailEnviado->Status = 2;
                $emailEnviado->save();
            } else {
                $emailEnviado->Status = 4;
                $emailEnviado->MensagemErro = $sendEmail;
                $emailEnviado->save();
            }
        }
    }
}