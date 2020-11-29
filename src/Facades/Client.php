<?php

/*
 * This file is part of the jassue/laravel-duoduoke.
 *
 * (c) jassue <jassue@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Jassue\LaravelDuoDuoKe\Facades;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Class Facade
 *
 * @see \Jassue\DuoDuoKe\Client
 * @package Jassue\LaravelDuoDuoKe
 */
class Client extends LaravelFacade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Jassue\DuoDuoKe\Client';
    }
}
