<?php
namespace Ors\Holidaycheck\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

class HolidayCheckFacade extends BaseFacade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'ors.holidaycheck'; }


}