<?php

namespace App\Services\SWAPI\Endpoints;

use App\Services\SWAPI\SwapiService;

class Starship
{

    private SwapiService $service;

    public function __construct()
    {
        $this->service = new SwapiService();
    }




}
