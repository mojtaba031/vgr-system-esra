<?php

namespace PayamResan\Package;

use PayamResan\Package\GatewayInterface;

class PayamResan implements GatewayInterface
{
    private $webservice;
    private $username;
    private $password;

    public function __construct() {
        ini_set("soap.wsdl_cache_enabled", "0");

        $this->webservice = config('payamresan.webservice');
        $this->username = config('payamresan.username');
        $this->password = config('payamresan.password');
    }

    public function sendMessageUrl(array $numbers, $text, $sender ){

    }

    public function sendMessage( array $numbers, $text, $sender, $type = 1, $alloweddelay = 0 )
    {
        if (!$this->username and !$this->password)
        {
            return 'نام کاربری و کلمه عبور درگاه پیام رسان صحیح نمی باشد';
        }

        if(!$this->getCredit())
        {
            return 'شما موجودی کافی در درگا پیام رسان ندارید';
        }

        try {
            $client = new \SoapClient( $this->webservice, array('encoding'=>'UTF-8') );
            $parameters['Username'] = $this->username;
            $parameters['PassWord'] = $this->password;
            $parameters['SenderNumber'] = $sender;
            $parameters['RecipientNumbers'] = $numbers;
            $parameters['MessageBodie'] = $text;
            $parameters['Type'] = $type;
            $parameters['AllowedDelay'] = $alloweddelay;
            $res = $client->SendMessage($parameters);
            return $res->SendMessageResult;
        } catch( SoapFault $ex ) {
            echo $ex->faultstring;
        }

    }

    public function sendMessageMultiple(array $numbers, array $text, array $sender, array $allowedDelay = [ 0 ] ){

    }

    public function getMessages(){

    }


    public function getMessagesStatus( array $messagesId ){

    }


    public function getAllMessages( $destnumber, $numberofmessages = 1 ){

    }


    public function getCredit(){
        if (!$this->username and !$this->password)
        {
            return 'نام کاربری و کلمه عبور درگاه پیام رسان صحیح نمی باشد';
        }

        try {
            $client = new \SoapClient( $this->webservice, array('encoding'=>'UTF-8') );
            $parameters['Username'] = $this->username;
            $parameters['PassWord'] = $this->password;

            return $client->GetCredit($parameters)->GetCreditResult;
        } catch( SoapFault $ex ) {
            return $ex->faultstring;
        }
    }
}
