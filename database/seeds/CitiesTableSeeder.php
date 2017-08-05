<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\City::class)->create([
		
		'nombre' => 'Moscú',
		'estadio' => 'Estadio Olímpico Luzhnikí',
		'capacidad' => 81300,
		'hora' => 3,
		'latitud' => 55.715762,
		'longitud' => 37.553716
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Moscú',
		'estadio' => 'Otkrytie Arena',
		'capacidad' => 46990,
		'hora' => 3,
		'latitud' => 55.817795,
		'longitud' => 37.440701
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'San Petersburgo',
		'estadio' => 'Zenit Arena',
		'capacidad' => 69500,
		'hora' => 3,
		'latitud' => 59.952223,
		'longitud' => 30.285406
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Kaliningrado',
		'estadio' => 'Arena Baltika',
		'capacidad' => 35000,
		'hora' => 2,
		'latitud' => 54.718531,
		'longitud' => 20.490193
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Kazán',
		'estadio' => 'Kazán Arena',
		'capacidad' => 45105,
		'hora' => 3,
		'latitud' => 55.820963,
		'longitud' => 49.160631
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Nizhni Nóvgorod',
		'estadio' => 'Estadio de Nizhni Nóvgorod',
		'capacidad' => 44899,
		'hora' => 3,
		'latitud' => 56.336829,
		'longitud' => 43.962728
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Samara',
		'estadio' => 'Samara Arena',
		'capacidad' => 44918,
		'hora' => 4,
		'latitud' => 53.277838,
		'longitud' => 50.237721
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Volgogrado',
		'estadio' => 'Volgogrado Arena',
		'capacidad' => 45015,
		'hora' => 3,
		'latitud' => 48.734483,
		'longitud' => 44.548555
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Saransk',
		'estadio' => 'Mordovia Arena',
		'capacidad' => 45015,
		'hora' => 3,
		'latitud' => 54.181867,
		'longitud' => 45.203711
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Rostov del Don',
		'estadio' => 'Rostov Arena',
		'capacidad' => 43702,
		'hora' => 3,
		'latitud' => 47.209942,
		'longitud' => 39.737529
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Sochi',
		'estadio' => 'Estadio Fisht',
		'capacidad' => 47659,
		'hora' => 3,
		'latitud' => 43.402011,
		'longitud' => 39.955709
	]);
	factory(App\City::class)->create([
		
		'nombre' => 'Ekaterimburgo',
		'estadio' => 'Ekaterimburgo Arena',
		'capacidad' => 35000,
		'hora' => 5,
		'latitud' => 56.83249,
		'longitud' => 60.573585
	]);




    }
}
