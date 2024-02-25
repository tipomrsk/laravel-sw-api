<?php

namespace App\Services\SWAPI\Endpoints;

trait HasStarship
{

    public function starship(): Starship
    {
        return new Starship();
    }

}
