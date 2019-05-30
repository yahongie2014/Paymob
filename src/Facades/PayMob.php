<?php
namespace Coder79\PayMob\Facades;
use Illuminate\Support\Facades\Facade;
class PayMob extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'paymob';
    }
}
