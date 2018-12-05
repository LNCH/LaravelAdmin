<?php

namespace Lnch\LaravelAdmin;

use Illuminate\Support\Facades\Facade;

class LaravelAdminLayoutFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-admin';
    }
}
