<?php

use Illuminate\Database\Seeder;

class PartidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Partido::class, 64)->create();

factory(App\Partido::class)->create([
		"local_id" => 1,
		"visitante_id" => 2,
		"fecha" => "2018-06-14 18:00:00",
		"fase" => 5,
		"grupo" => "A",
		"cities_id" => 1,
]);
factory(App\Partido::class)->create([
		"local_id" => 3,
		"visitante_id" => 4,
		"fecha" => "2018-06-15 17:00:00",
		"fase" => 5,
		"grupo" => "A",
		"cities_id" => 12,
]);
factory(App\Partido::class)->create([
		"local_id" => 1,
		"visitante_id" => 3,
		"fecha" => "2018-06-19 21:00:00",
		"fase" => 5,
		"grupo" => "A",
		"cities_id" => 3,
]);
factory(App\Partido::class)->create([
		"local_id" => 4,
		"visitante_id" => 2,
		"fecha" => "2018-06-20 18:00:00",
		"fase" => 5,
		"grupo" => "A",
		"cities_id" => 10,
]);
factory(App\Partido::class)->create([
		"local_id" => 4,
		"visitante_id" => 1,
		"fecha" => "2018-06-25 18:00:00",
		"fase" => 5,
		"grupo" => "A",
		"cities_id" => 7,
]);
factory(App\Partido::class)->create([
		"local_id" => 2,
		"visitante_id" => 3,
		"fecha" => "2018-06-25 17:00:00",
		"fase" => 5,
		"grupo" => "A",
		"cities_id" => 8,
]);
factory(App\Partido::class)->create([
		"local_id" => 5,
		"visitante_id" => 6,
		"fecha" => "2018-06-15 21:00:00",
		"fase" => 5,
		"grupo" => "B",
		"cities_id" => 11,
]);
factory(App\Partido::class)->create([
		"local_id" => 7,
		"visitante_id" => 8,
		"fecha" => "2018-06-15 18:00:00",
		"fase" => 5,
		"grupo" => "B",
		"cities_id" => 3,
]);
factory(App\Partido::class)->create([
		"local_id" => 5,
		"visitante_id" => 7,
		"fecha" => "2018-06-20 15:00:00",
		"fase" => 5,
		"grupo" => "B",
		"cities_id" => 1,
]);
factory(App\Partido::class)->create([
		"local_id" => 8,
		"visitante_id" => 6,
		"fecha" => "2018-06-20 21:00:00",
		"fase" => 5,
		"grupo" => "B",
		"cities_id" => 5,
]);
factory(App\Partido::class)->create([
		"local_id" => 8,
		"visitante_id" => 5,
		"fecha" => "2018-06-25 21:00:00",
		"fase" => 5,
		"grupo" => "B",
		"cities_id" => 9,
]);
factory(App\Partido::class)->create([
		"local_id" => 6,
		"visitante_id" => 7,
		"fecha" => "2018-06-25 20:00:00",
		"fase" => 5,
		"grupo" => "B",
		"cities_id" => 12,
]);
factory(App\Partido::class)->create([
		"local_id" => 9,
		"visitante_id" => 10,
		"fecha" => "2018-06-16 13:00:00",
		"fase" => 5,
		"grupo" => "C",
		"cities_id" => 5,
]);
factory(App\Partido::class)->create([
		"local_id" => 11,
		"visitante_id" => 12,
		"fecha" => "2018-06-16 19:00:00",
		"fase" => 5,
		"grupo" => "C",
		"cities_id" => 9,
]);
factory(App\Partido::class)->create([
		"local_id" => 9,
		"visitante_id" => 11,
		"fecha" => "2018-06-21 17:00:00",
		"fase" => 5,
		"grupo" => "C",
		"cities_id" => 4,
]);
factory(App\Partido::class)->create([
		"local_id" => 12,
		"visitante_id" => 10,
		"fecha" => "2018-06-21 19:00:00",
		"fase" => 5,
		"grupo" => "C",
		"cities_id" => 7,
]);
factory(App\Partido::class)->create([
		"local_id" => 12,
		"visitante_id" => 9,
		"fecha" => "2018-06-26 17:00:00",
		"fase" => 5,
		"grupo" => "C",
		"cities_id" => 1,
]);
factory(App\Partido::class)->create([
		"local_id" => 10,
		"visitante_id" => 11,
		"fecha" => "2018-06-26 17:00:00",
		"fase" => 5,
		"grupo" => "C",
		"cities_id" => 11,
]);
factory(App\Partido::class)->create([
		"local_id" => 13,
		"visitante_id" => 14,
		"fecha" => "2018-06-16 16:00:00",
		"fase" => 5,
		"grupo" => "D",
		"cities_id" => 2,
]);
factory(App\Partido::class)->create([
		"local_id" => 15,
		"visitante_id" => 16,
		"fecha" => "2018-06-16 21:00:00",
		"fase" => 5,
		"grupo" => "D",
		"cities_id" => 4,
]);
factory(App\Partido::class)->create([
		"local_id" => 13,
		"visitante_id" => 15,
		"fecha" => "2018-06-21 21:00:00",
		"fase" => 5,
		"grupo" => "D",
		"cities_id" => 6,
]);
factory(App\Partido::class)->create([
		"local_id" => 16,
		"visitante_id" => 14,
		"fecha" => "2018-06-22 18:00:00",
		"fase" => 5,
		"grupo" => "D",
		"cities_id" => 8,
]);
factory(App\Partido::class)->create([
		"local_id" => 16,
		"visitante_id" => 13,
		"fecha" => "2018-06-26 21:00:00",
		"fase" => 5,
		"grupo" => "D",
		"cities_id" => 3,
]);
factory(App\Partido::class)->create([
		"local_id" => 14,
		"visitante_id" => 15,
		"fecha" => "2018-06-26 21:00:00",
		"fase" => 5,
		"grupo" => "D",
		"cities_id" => 10,
]);
factory(App\Partido::class)->create([
		"local_id" => 17,
		"visitante_id" => 18,
		"fecha" => "2018-06-17 21:00:00",
		"fase" => 5,
		"grupo" => "E",
		"cities_id" => 10,
]);
factory(App\Partido::class)->create([
		"local_id" => 19,
		"visitante_id" => 20,
		"fecha" => "2018-06-17 16:00:00",
		"fase" => 5,
		"grupo" => "E",
		"cities_id" => 7,
]);
factory(App\Partido::class)->create([
		"local_id" => 17,
		"visitante_id" => 19,
		"fecha" => "2018-06-22 15:00:00",
		"fase" => 5,
		"grupo" => "E",
		"cities_id" => 3,
]);
factory(App\Partido::class)->create([
		"local_id" => 20,
		"visitante_id" => 18,
		"fecha" => "2018-06-22 20:00:00",
		"fase" => 5,
		"grupo" => "E",
		"cities_id" => 12,
]);
factory(App\Partido::class)->create([
		"local_id" => 20,
		"visitante_id" => 17,
		"fecha" => "2018-06-27 21:00:00",
		"fase" => 5,
		"grupo" => "E",
		"cities_id" => 2,
]);
factory(App\Partido::class)->create([
		"local_id" => 18,
		"visitante_id" => 19,
		"fecha" => "2018-06-27 21:00:00",
		"fase" => 5,
		"grupo" => "E",
		"cities_id" => 6,
]);
factory(App\Partido::class)->create([
		"local_id" => 21,
		"visitante_id" => 22,
		"fecha" => "2018-06-17 18:00:00",
		"fase" => 5,
		"grupo" => "F",
		"cities_id" => 1,
]);
factory(App\Partido::class)->create([
		"local_id" => 23,
		"visitante_id" => 24,
		"fecha" => "2018-06-18 15:00:00",
		"fase" => 5,
		"grupo" => "F",
		"cities_id" => 6,
]);
factory(App\Partido::class)->create([
		"local_id" => 21,
		"visitante_id" => 23,
		"fecha" => "2018-06-23 18:00:00",
		"fase" => 5,
		"grupo" => "F",
		"cities_id" => 11,
]);
factory(App\Partido::class)->create([
		"local_id" => 24,
		"visitante_id" => 22,
		"fecha" => "2018-06-23 21:00:00",
		"fase" => 5,
		"grupo" => "F",
		"cities_id" => 10,
]);
factory(App\Partido::class)->create([
		"local_id" => 24,
		"visitante_id" => 21,
		"fecha" => "2018-06-27 17:00:00",
		"fase" => 5,
		"grupo" => "F",
		"cities_id" => 5,
]);
factory(App\Partido::class)->create([
		"local_id" => 22,
		"visitante_id" => 23,
		"fecha" => "2018-06-27 19:00:00",
		"fase" => 5,
		"grupo" => "F",
		"cities_id" => 4,
]);
factory(App\Partido::class)->create([
		"local_id" => 25,
		"visitante_id" => 26,
		"fecha" => "2018-06-18 18:00:00",
		"fase" => 5,
		"grupo" => "G",
		"cities_id" => 11,
]);
factory(App\Partido::class)->create([
		"local_id" => 27,
		"visitante_id" => 28,
		"fecha" => "2018-06-18 21:00:00",
		"fase" => 5,
		"grupo" => "G",
		"cities_id" => 8,
]);
factory(App\Partido::class)->create([
		"local_id" => 25,
		"visitante_id" => 27,
		"fecha" => "2018-06-23 15:00:00",
		"fase" => 5,
		"grupo" => "G",
		"cities_id" => 2,
]);
factory(App\Partido::class)->create([
		"local_id" => 28,
		"visitante_id" => 26,
		"fecha" => "2018-06-24 15:00:00",
		"fase" => 5,
		"grupo" => "G",
		"cities_id" => 6,
]);
factory(App\Partido::class)->create([
		"local_id" => 28,
		"visitante_id" => 25,
		"fecha" => "2018-06-28 20:00:00",
		"fase" => 5,
		"grupo" => "G",
		"cities_id" => 12,
]);
factory(App\Partido::class)->create([
		"local_id" => 26,
		"visitante_id" => 27,
		"fecha" => "2018-06-28 21:00:00",
		"fase" => 5,
		"grupo" => "G",
		"cities_id" => 9,
]);
factory(App\Partido::class)->create([
		"local_id" => 29,
		"visitante_id" => 30,
		"fecha" => "2018-06-19 15:00:00",
		"fase" => 5,
		"grupo" => "H",
		"cities_id" => 2,
]);
factory(App\Partido::class)->create([
		"local_id" => 31,
		"visitante_id" => 32,
		"fecha" => "2018-06-19 18:00:00",
		"fase" => 5,
		"grupo" => "H",
		"cities_id" => 9,
]);
factory(App\Partido::class)->create([
		"local_id" => 29,
		"visitante_id" => 31,
		"fecha" => "2018-06-24 21:00:00",
		"fase" => 5,
		"grupo" => "H",
		"cities_id" => 5,
]);
factory(App\Partido::class)->create([
		"local_id" => 32,
		"visitante_id" => 30,
		"fecha" => "2018-06-24 20:00:00",
		"fase" => 5,
		"grupo" => "H",
		"cities_id" => 4,
]);
factory(App\Partido::class)->create([
		"local_id" => 32,
		"visitante_id" => 29,
		"fecha" => "2018-06-28 17:00:00",
		"fase" => 5,
		"grupo" => "H",
		"cities_id" => 8,
]);
factory(App\Partido::class)->create([
		"local_id" => 30,
		"visitante_id" => 31,
		"fecha" => "2018-06-28 18:00:00",
		"fase" => 5,
		"grupo" => "H",
		"cities_id" => 7,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-06-30 21:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 11,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-06-30 17:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 5,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-01 17:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 1,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-01 21:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 6,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-02 18:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 7,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-02 21:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 10,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-03 17:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 3,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-03 21:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 2,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-06 17:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 6,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-06 21:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 5,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-07 21:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 11,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-07 18:00:00",
		"fase" => 4,
		"grupo" => null,
		"cities_id" => 7,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-10 21:00:00",
		"fase" => 2,
		"grupo" => null,
		"cities_id" => 3,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-11 21:00:00",
		"fase" => 2,
		"grupo" => null,
		"cities_id" => 1,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-14 17:00:00",
		"fase" => 1,
		"grupo" => null,
		"cities_id" => 3,
]);
factory(App\Partido::class)->create([
		"local_id" => null,
		"visitante_id" => null,
		"fecha" => "2018-07-15 18:00:00",
		"fase" => 0,
		"grupo" => null,
		"cities_id" => 1,
]);

    }
}
/*
	$table->integer('local_id')->unsigned()->nullable();
    $table->integer('visitante_id')->unsigned()->nullable();
    $table->timestamp('fecha');
    $table->unsignedSmallInteger('fase')->nullable();
    $table->string('grupo', 1)->nullable();
    $table->integer('cities_id')->unsigned();
    $table->unsignedSmallInteger('lg')->nullable();
    $table->unsignedSmallInteger('vg')->nullable();
*/