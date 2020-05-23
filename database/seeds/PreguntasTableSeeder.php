<?php
use App\Preguntas;
use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        if(env('APP_ENV') != 'production') {
            DB::table('preguntas')->truncate();
            
            for ($i = 0; $i < 20; $i++) {
                Preguntas::create([
                    'pregunta' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'respuesta1' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'respuesta2' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'respuesta3' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'respuesta4' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'categoria' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                ]);
            }
        }
        
    }
}
