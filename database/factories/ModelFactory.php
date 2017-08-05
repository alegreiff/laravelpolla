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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'type' => $faker->numberBetween(1,2),
        'remember_token' => str_random(10),

    ];
});


$factory->define(App\Equipo::class, function (Faker\Generator $faker) {
    //static $password;
$equipos = array('Argentina', 'Brasil', 'España', 'Alemania', 'México', 'Colombia', 'Italia', 'Francia', 'Corea del Sur', 'Portugal', 'Uruguay', 'Chile', 'Estados Unidos', 'Bélgica', 'Inglaterra', 'Nigeria', 'Croacia', 'Suiza', 'Serbia', 'Polonia', 'Costa Rica', 'Suecia', 'Costa de Marfil', 'Burkina Faso', 'Egipto', 'Japón', 'Arabia Saudita', 'RD Congo', 'Irán', 'Islandia', 'Australia', 'Rusia');

//$num = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32);

$bomboA = array('Argentina', 'Brasil', 'España', 'Alemania', 'México', 'Colombia', 'Italia');
$bomboB = array('Francia', 'Corea del Sur', 'Portugal', 'Uruguay', 'Chile', 'Estados Unidos', 'Bélgica', 'Inglaterra');
$bomboC = array('Nigeria', 'Croacia', 'Suiza', 'Serbia', 'Polonia', 'Costa Rica', 'Suecia', 'Costa de Marfil');
$bomboD = array('Burkina Faso', 'Egipto', 'Japón', 'Arabia Saudita', 'RD Congo', 'Irán', 'Islandia', 'Australia');


    return [
        'nombre' => $faker->unique->randomElement($equipos),
        //'nombre' =>$faker->unique()->country,
        'abr' => $faker->unique()->countryCode,
        //'abr' =>$faker->randomElement($abr),
        'color' =>$faker->unique()->hexcolor,
        'bombo' =>$faker->numberBetween(1,4),
        'confederacion' =>$faker->randomElement(['Europa', 'Asia', 'África', 'Suramérica', 'Norte América', 'Oceanía']),
        'grupo' => $faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H']),
        'posgrupo' =>$faker->numberBetween(1,4), 
        'capital' =>$faker->unique()->city,
        'fifa' =>$faker->unique()->numberBetween(50,99),
        'pg' =>$faker->numberBetween(1,3), 
        'pe' =>$faker->numberBetween(1,3), 
        'pp' =>$faker->numberBetween(1,3), 
        'gf' =>$faker->numberBetween(1,3), 
        'gc' =>$faker->numberBetween(-2,5), 

    ];
});


$factory->define(App\City::class, function (Faker\Generator $faker) {
    static $password;
        return[
        
        ];
});


$factory->define(App\Colequipo::class, function (Faker\Generator $faker) {
    static $password;
        return[
        
        ];
});

$factory->define(App\Partido::class, function (Faker\Generator $faker) {
    static $password;
        return[
            'local_id' => App\Equipo::all()->random()->id,
            'visitante_id' => App\Equipo::all()->random()->id,
            'fecha' => $faker->dateTime(),
            'cities_id' => App\City::all()->random()->id,

        ];
});




