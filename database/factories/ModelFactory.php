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

$factory->define('Portfolio\User', function($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10)
    ];
});

$factory->define('Portfolio\Category', function($faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
    ];
});

$factory->define('Portfolio\Products', function($faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'prince'=>$faker->randomNumber(2),
        'featured'=>$faker->boolean,
        'recommend'=>$faker->boolean,
        
        /*

         * NA DUVIDA DOS TIPOS DE DADOS ACESSE:
         * 
         * https://github.com/fzaninotto/Faker#formatters
         *          */
        
       
        
        
    ];
});