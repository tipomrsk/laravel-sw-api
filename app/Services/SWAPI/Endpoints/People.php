<?php

namespace App\Services\SWAPI\Endpoints;

use App\Services\SWAPI\SwapiService;
use Illuminate\Support\Collection;
use \App\Services\SWAPI\Entities\Person;

class People
{

    private SwapiService $service;
    public function __construct()
    {
        $this->service = new SwapiService();
    }

    public function get(): Collection
    {
        return $this->transform(
            $this->service->api->get('/people')
        );
    }

    private function transform(mixed $json): Collection
    {
        return collect($json['results'])
        ->map(fn ($person) => new Person($person));
    }
}
