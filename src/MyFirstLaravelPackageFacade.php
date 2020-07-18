<?php

namespace Georanma\MyFirstLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Georanma\MyFirstLaravelPackage\MyFirstLaravelPackage
 */
class MyFirstLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-first-laravel-package';
    }
}
