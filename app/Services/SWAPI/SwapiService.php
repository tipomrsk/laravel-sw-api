<?php

namespace App\Services\SWAPI;

use App\Services\SWAPI\Endpoints\HasPeople;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;


/**
 * SWAPI Service
 * https://swapi.dev/
 */
class SwapiService
{

    use HasPeople;
    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::baseUrl('https://swapi.dev/api');
    }

}
