<?php

namespace App\Services\SWAPI\Entities;

class Person
{

    public string $name;
    public string $height;
    public string $mass;
    public string $hairColor;
    public string $skinColor;
    public string $eyeColor;
    public string $birthYear;
    public string $gender;
    public string $homeworld;
    public array $films;
    public array $species;
    public array $vehicles;
    public array $starships;
    public string $created;
    public string $edited;
    public string $url;


    public function __construct(array $data)
    {
        $this->name       = data_get($data, 'name');
        $this->height     = data_get($data, 'height');
        $this->mass       = data_get($data, 'mass');
        $this->hairColor = data_get($data, 'hair_color');
        $this->skinColor = data_get($data, 'skin_color');
        $this->eyeColor  = data_get($data, 'eye_color');
        $this->birthYear = data_get($data, 'birth_year');
        $this->gender     = data_get($data, 'gender');
        $this->homeworld  = data_get($data, 'homeworld');
        $this->films      = data_get($data, 'films');
        $this->species    = data_get($data, 'species');
        $this->vehicles   = data_get($data, 'vehicles');
        $this->starships  = data_get($data, 'starships');
        $this->created    = data_get($data, 'created');
        $this->edited     = data_get($data, 'edited');
        $this->url        = data_get($data, 'url');
    }

}
