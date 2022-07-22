<?php
    namespace VgrSystem\Esra;

    interface VgrEsraInterface {

        /**
            * @param integer $rating
            *
            * @return mixed
        */
        public function showImage( $rating = 3 );
    }
?>
