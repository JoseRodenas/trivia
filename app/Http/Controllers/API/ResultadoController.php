<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resultado;
use Illuminate\Support\Facades\DB;

class ResultadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Resultado = DB::table('resultados')->orderByRaw('puntos DESC')->get();
        
        return $Resultado;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultado = new Resultado;
        $resultado->user = $request->get('user');
        $resultado->numeropreguntas = $request->get('numeropreguntas');
        $resultado->numeroaciertos = $request->get('numeroaciertos');
        $resultado->puntos = $request->get('puntos');
        $resultado->categoria = $request->get('categoria');
        $resultado->save();
        echo "Almacenada partida con exito";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
