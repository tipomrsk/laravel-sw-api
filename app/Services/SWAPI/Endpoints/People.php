<?php

namespace App\Services\SWAPI\Endpoints;

use App\Services\SWAPI\SwapiService;
use Illuminate\Support\Collection;
use \App\Services\SWAPI\Entities\Person;

class People extends RootEndpoint
{

    public function get(): Collection
    {
        return $this->transform(
            $this->service->api->get('/people')->json('results'),
            Person::class
        );
    }

    public function getById(int $id): Collection
    {

        /**
         * $this->service->api->get("/people/{$id}")
         * get first position of the array
         */



        return $this->transform(
            [$this->service->api->get("/people/{$id}")->json()],
            Person::class
        );
    }
}
