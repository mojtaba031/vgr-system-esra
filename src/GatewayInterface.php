<?php
    namespace PayamResan\Package;

    interface GatewayInterface {

        /**
            * @param array $numbers
            * @param String $text
            * @param String $sender
            *
            * @return mixed
        */
        public function sendMessageUrl(array $numbers, $text, $sender );

        /**
            * @param array $numbers
            * @param String $text
            * @param String $sender
            * @param integer $type
            * @param integer $alloweddelay
            *
            * @return mixed
        */
        public function sendMessage( array $numbers, $text, $sender, $type = 1, $alloweddelay = 0 );

        /**
            * @param array $numbers
            * @param array $text
            * @param array $sender
            * @param array $alloweddelay
            *
            * @return mixed
        */
        public function sendMessageMultiple(array $numbers, array $text, array $sender, array $allowedDelay = [ 0 ] );

        /**
            * @return mixed
        */
        public function getMessages();

        /**
            * @param array $messagesId
            *
            * @return mixed
        */
        public function getMessagesStatus( array $messagesId );

        /**
            * @param String $destnumber
            * @param integer $numberofmessages
            *
            * @return mixed
        */
        public function getAllMessages( $destnumber, $numberofmessages = 1 );

        /**
            * @return int
        */
        public function getCredit();
    }
?>
