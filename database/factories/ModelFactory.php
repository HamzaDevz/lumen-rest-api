<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->surname,
        'email' => $faker->email,
    ];
});

/**
 * Factory definition for model App\User.
 */
$factory->define(App\User::class, function ($faker) {
    return [
        'project_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        'project_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        'project_id' => $faker->key,
    ];
});

/**
 * Factory definition for model App\Question.
 */
$factory->define(App\Question::class, function ($faker) {
    return [
        'project_id' => $faker->key,
    ];
});
