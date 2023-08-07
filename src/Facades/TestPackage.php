<?php

namespace LichtAnd\TestPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LichtAnd\TestPackage\TestPackage
 */
class TestPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LichtAnd\TestPackage\TestPackage::class;
    }
}
