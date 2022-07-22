<?php
    namespace VgrSystem\Esra\Laravel\Facade;

    use Illuminate\Support\Facades\Facade;

    class VgrEsraFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'VgrEsra';
        }
    }
?>
