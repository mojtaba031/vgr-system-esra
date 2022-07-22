<?php
    namespace VgrSystem\Esra;

    interface EsraInterface {

        /**
            * @param integer $rating
            *
            * @return mixed
        */
        public function showImage( $rating = 3 );
    }
?>
