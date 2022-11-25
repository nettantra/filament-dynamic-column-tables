<?php

namespace NetTantra\FilamentDynamicColumnTables\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NetTantra\FilamentDynamicColumnTables\FilamentDynamicColumnTables
 */
class FilamentDynamicColumnTables extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \NetTantra\FilamentDynamicColumnTables\FilamentDynamicColumnTables::class;
    }
}
