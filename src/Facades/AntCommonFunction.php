<?php
namespace Debuglee\AntCommonFunction;

use Illuminate\Support\Facades\Facade;

class AntCommonFunctionFacade extends Facade
{
    protected function getFacadeAccessor()
    {
        return 'AntCommonFunction';
    }
}

