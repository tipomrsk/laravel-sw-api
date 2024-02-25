<?php

use App\Services\SWAPI\Entities\Person;
use App\Services\SWAPI\Facades\Swapi;
use Illuminate\Support\Collection;

it('get method from HasPeople trait', function () {

    $people = Swapi::people()->get();

    expect($people)
        ->toBeInstanceOf(Collection::class)
        ->and($people->first())       ->toBeInstanceOf(Person::class)
        ->and($people->first()->name) ->toBe('Luke Skywalker');
});

it('getById method from HasPeople trait', function () {

    $people = Swapi::people()->getById(1);

    expect($people)
        ->toBeInstanceOf(Collection::class)
        ->and($people->first())       ->toBeInstanceOf(Person::class)
        ->and($people->first()->name) ->toBe('Luke Skywalker');
});
