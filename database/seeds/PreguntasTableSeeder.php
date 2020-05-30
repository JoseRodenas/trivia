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
        DB::table('preguntas')->truncate();
        $json = File::get("database/data/Preguntas.json");
        $datos = json_decode($json);
        foreach ($datos as $objeto) {
            Preguntas::create(array(
                'pregunta' => $objeto->pregunta,
                'respuesta1' => $objeto->respuesta1,
                'respuesta2' => $objeto->respuesta2,
                'respuesta3' => $objeto->respuesta3,
                'respuesta4' => $objeto->respuesta4,
                'categoria' => $objeto->categoria,
            ));
        }
     
    }
}
