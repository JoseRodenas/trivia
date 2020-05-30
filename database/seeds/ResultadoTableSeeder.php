<?php

use Illuminate\Database\Seeder;
use App\Resultado;
class ResultadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $faker = \Faker\Factory::create();

        if(env('APP_ENV') != 'production') {
            DB::table('resultados')->truncate();
            
            for ($i = 0; $i < 20; $i++) {
                Resultado::create([
                    'user' => $faker->randomDigit(),
                    'numeropreguntas' => $faker->randomDigit(),
                    'numeroaciertos' => $faker->randomDigit(),
                    'puntos' => $faker->randomDigit(),
                    'categoria' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                ]);
            }
        } */
    }
}
