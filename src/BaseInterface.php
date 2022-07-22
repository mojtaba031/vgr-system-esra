<?php
    namespace VgrSystem\Esra;

    interface BaseInterface {

        /**
            * @param integer $rating
            *
            * @return mixed
        */
        public function showImage( $rating = 3 );
    }
?>
