<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        factory(App\Equipo::class)->create(
        	[
                'nombre'=>'Rusia',
                'abr' => 'ru',
                'grupo' => 'A',
                'color' =>$faker->unique()->hexcolor,
                'posgrupo'=> 1, 
                'capital' =>'Moscú',
            ]);


$equipos = array('Argentina', 'Brasil', 'España', 'Alemania', 'México', 'Colombia', 'Italia', 'Francia', 'Corea del Sur', 'Portugal', 'Uruguay', 'Chile', 'Estados Unidos', 'Bélgica', 'Inglaterra', 'Nigeria', 'Croacia', 'Suiza', 'Serbia', 'Polonia', 'Costa Rica', 'Suecia', 'Costa de Marfil', 'Burkina Faso', 'Egipto', 'Japón', 'Arabia Saudita', 'RD Congo', 'Irán', 'Islandia', 'Australia');

$bomboA = array('Argentina', 'Brasil', 'España', 'Alemania', 'México', 'Colombia', 'Italia');
$bomboB = array('Francia', 'Corea del Sur', 'Portugal', 'Uruguay', 'Chile', 'Estados Unidos', 'Bélgica', 'Inglaterra');
$bomboC = array('Nigeria', 'Croacia', 'Suiza', 'Serbia', 'Polonia', 'Costa Rica', 'Suecia', 'Costa de Marfil');
$bomboD = array('Burkina Faso', 'Egipto', 'Japón', 'Arabia Saudita', 'RD Congo', 'Irán', 'Islandia', 'Australia');
          
        foreach (range(2,32) as $index) {


        if ($index === 2 | $index === 6 | $index === 10 | $index === 14 | $index === 18 |$index === 22 |$index === 26 | $index === 30){
                DB::table('equipos')->insert([
                'nombre' => $faker->unique->randomElement($bomboB),
                'abr' => $faker->unique()->countryCode,
                'color' =>$faker->unique()->hexcolor,
                'bombo' =>$faker->numberBetween(1,4),
                'confederacion' =>$faker->randomElement(['Europa', 'Asia', 'África', 'Suramérica', 'Norte América', 'Oceanía']),
                'grupo' => 'A',
                'posgrupo' =>2, 
                'capital' =>$faker->unique()->city,
                'fifa' =>$faker->unique()->numberBetween(50,99),
                'pg' =>$faker->numberBetween(1,3), 
                'pe' =>$faker->numberBetween(1,3), 
                'pp' =>$faker->numberBetween(1,3), 
                'gf' =>$faker->numberBetween(1,3), 
                'gc' =>$faker->numberBetween(-2,5),                 
                ]);            
            }
        if ($index === 3 | $index === 7 | $index === 11 | $index === 15 | $index === 19 |$index === 23 |$index === 27 | $index === 31){
                DB::table('equipos')->insert([
                'nombre' => $faker->unique->randomElement($bomboC),
                'abr' => $faker->unique()->countryCode,
                'color' =>$faker->unique()->hexcolor,
                'bombo' =>$faker->numberBetween(1,4),
                'confederacion' =>$faker->randomElement(['Europa', 'Asia', 'África', 'Suramérica', 'Norte América', 'Oceanía']),
                'grupo' => 'A',
                'posgrupo' =>3, 
                'capital' =>$faker->unique()->city,
                'fifa' =>$faker->unique()->numberBetween(50,99),
                'pg' =>$faker->numberBetween(1,3), 
                'pe' =>$faker->numberBetween(1,3), 
                'pp' =>$faker->numberBetween(1,3), 
                'gf' =>$faker->numberBetween(1,3), 
                'gc' =>$faker->numberBetween(-2,5),                 
                ]);            
            }
        if ($index === 4 | $index === 8 | $index === 12 | $index === 16 | $index === 20 |$index === 24 |$index === 28 | $index === 32){
                DB::table('equipos')->insert([
                'nombre' => $faker->unique->randomElement($bomboD),
                'abr' => $faker->unique()->countryCode,
                'color' =>$faker->unique()->hexcolor,
                'bombo' =>$faker->numberBetween(1,4),
                'confederacion' =>$faker->randomElement(['Europa', 'Asia', 'África', 'Suramérica', 'Norte América', 'Oceanía']),
                'grupo' => 'A',
                'posgrupo' =>4, 
                'capital' =>$faker->unique()->city,
                'fifa' =>$faker->unique()->numberBetween(50,99),
                'pg' =>$faker->numberBetween(1,3), 
                'pe' =>$faker->numberBetween(1,3), 
                'pp' =>$faker->numberBetween(1,3), 
                'gf' =>$faker->numberBetween(1,3), 
                'gc' =>$faker->numberBetween(-2,5),                 
                ]);            
            }
        if ($index === 5 | $index === 9 | $index === 13 | $index === 17 |$index === 21 |$index === 25 | $index === 29){
                DB::table('equipos')->insert([
                'nombre' => $faker->unique->randomElement($bomboA),
                'abr' => $faker->unique()->countryCode,
                'color' =>$faker->unique()->hexcolor,
                'bombo' =>$faker->numberBetween(1,4),
                'confederacion' =>$faker->randomElement(['Europa', 'Asia', 'África', 'Suramérica', 'Norte América', 'Oceanía']),
                'grupo' => 'A',
                'posgrupo' =>4, 
                'capital' =>$faker->unique()->city,
                'fifa' =>$faker->unique()->numberBetween(50,99),
                'pg' =>$faker->numberBetween(1,3), 
                'pe' =>$faker->numberBetween(1,3), 
                'pp' =>$faker->numberBetween(1,3), 
                'gf' =>$faker->numberBetween(1,3), 
                'gc' =>$faker->numberBetween(-2,5),                 
                ]);            
            }
        if ($index >4 && $index < 9){
                DB::table('equipos')->where('id', $index)->update(['grupo' => 'B']);            
            }
        if ($index >8 && $index < 13){
                DB::table('equipos')->where('id', $index)->update(['grupo' => 'C']);            
            }
        if ($index >12 && $index < 17){
                DB::table('equipos')->where('id', $index)->update(['grupo' => 'D']);            
            }
        if ($index >16 && $index < 21){
                DB::table('equipos')->where('id', $index)->update(['grupo' => 'E']);            
            }
        if ($index >20 && $index < 25){
                DB::table('equipos')->where('id', $index)->update(['grupo' => 'F']);            
            }
        if ($index >24 && $index < 29){
                DB::table('equipos')->where('id', $index)->update(['grupo' => 'G']);            
            }
        if ($index >28){
                DB::table('equipos')->where('id', $index)->update(['grupo' => 'H']);            
            }
        }

        //factory(App\Equipo::class, 31)->create();
    }
}


/*
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Uruguay',
        'grupo' => 'A',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Serbia',
        'abr' => 'ru',
        'grupo' => 'A',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'RD Congo',
        'abr' => 'ru',
        'grupo' => 'A',
        'posgrupo'=> 4, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Argentina',
        'abr' => 'ru',
        'grupo' => 'B',
        'posgrupo'=> 1, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Bélgica',
        'abr' => 'ru',
        'grupo' => 'B',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Suecia',
        'abr' => 'ru',
        'grupo' => 'B',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Arabia Saudita',
        'abr' => 'ru',
        'grupo' => 'B',
        'posgrupo'=> 4, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Brasil',
        'abr' => 'ru',
        'grupo' => 'C',
        'posgrupo'=> 1, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Francia',
        'abr' => 'co',
        'grupo' => 'C',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Costa de Marfil',
        'abr' => 'ru',
        'grupo' => 'C',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Islandia',
        'abr' => 'ru',
        'grupo' => 'C',
        'posgrupo'=> 4, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'España',
        'abr' => 'ru',
        'grupo' => 'D',
        'posgrupo'=> 1, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Chile',
        'abr' => 'ru',
        'grupo' => 'D',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Nigeria',
        'abr' => 'ru',
        'grupo' => 'D',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Burkina Faso',
        'abr' => 'ru',
        'grupo' => 'D',
        'posgrupo'=> 4, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Alemania',
        'abr' => 'ru',
        'grupo' => 'E',
        'posgrupo'=> 1, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Corea del Sur',
        'abr' => 'ru',
        'grupo' => 'E',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Costa Rica',
        'abr' => 'ru',
        'grupo' => 'E',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Japón',
        'abr' => 'ru',
        'grupo' => 'E',
        'posgrupo'=> 4, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'México',
        'abr' => 'ru',
        'grupo' => 'F',
        'posgrupo'=> 1, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Portugal',
        'abr' => 'ru',
        'grupo' => 'F',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Polonia',
        'abr' => 'ru',
        'grupo' => 'F',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Irán',
        'abr' => 'ru',
        'grupo' => 'F',
        'posgrupo'=> 4, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Italia',
        'abr' => 'ru',
        'grupo' => 'G',
        'posgrupo'=> 1, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Estados Unidos',
        'abr' => 'ru',
        'grupo' => 'G',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Suiza',
        'abr' => 'ru',
        'grupo' => 'G',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Egipto',
        'abr' => 'ru',
        'grupo' => 'G',
        'posgrupo'=> 4, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Colombia',
        'abr' => 'ru',
        'grupo' => 'H',
        'posgrupo'=> 1, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Inglaterra',
        'abr' => 'ru',
        'grupo' => 'H',
        'posgrupo'=> 2, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Croacia',
        'abr' => 'ru',
        'grupo' => 'H',
        'posgrupo'=> 3, 
        
    ]);
factory(App\Equipo::class)->create(
    [
        'nombre'=>'Australia',
        'abr' => 'ru',
        'grupo' => 'H',
        'posgrupo'=> 4, 
        
    ]);
*/

