<?php

namespace App\Services\SWAPI\Endpoints;

use App\Services\SWAPI\Entities\Person;
use App\Services\SWAPI\SwapiService;
use Illuminate\Support\Collection;

class RootEndpoint
{

    protected SwapiService $service;
    public function __construct()
    {
        $this->service = new SwapiService();
    }


    protected function transform(mixed $json, string $entity): Collection
    {
        return collect($json)
            ->map(fn ($object) => new $entity($object));
    }

}
