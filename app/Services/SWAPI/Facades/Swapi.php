<?php

namespace App\Services\SWAPI\Facades;


use App\Services\SWAPI\SwapiService;
use Illuminate\Support\Facades\Facade;

class Swapi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return SwapiService::class;
    }
}
