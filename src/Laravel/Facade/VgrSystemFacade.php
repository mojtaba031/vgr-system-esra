<?php
    namespace VgrSystem\Esra\Laravel\Facade;

    use Illuminate\Support\Facades\Facade;

    class EsraFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'Esra';
        }
    }
?>
