<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Joker;

$factory->define(Employee::class, function (Joker $joker) {
    return [
        'name' => $joker->name,
    ];
});
