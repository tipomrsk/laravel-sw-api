<?php

namespace App\Services\SWAPI\Endpoints;

trait HasPeople
{

    public function people()
    {
        return new People();
    }

}
