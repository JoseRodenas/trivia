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
        /* $faker = \Faker\Factory::create(); */

        if(env('APP_ENV') != 'production') {
            DB::table('preguntas')->truncate();
            $Preguntas = factory(App\Preguntas::class, 10)->create();
            /* for ($i = 0; $i < 20; $i++) {
                Preguntas::create([
                    'pregunta' => $faker->sentence,
                    'resultado1' => $faker->sentence,
                    'resultado2' => $faker->sentence,
                    'resultado3' => $faker->sentence,
                    'resultado4' => $faker->sentence,
                    'categoria' => $faker->sentence,
                ]);
            } */
        }
        
    }
}
