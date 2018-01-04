<?php namespace Vendor\Name\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Name facade.
 *
 * @package Vendor\Name
 * @author  Dendi Sunandar <dendisunandar@gmail.com>
 */
class Name extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'name';
    }
}
