<?php

namespace App\Http\Controllers;
use App\Models\Vuelo;

use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $vuelos = Vuelo::all();
        return $vuelos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $vuelo = new Vuelo();
        $vuelo->codigo = $request->codigo;

        $vuelo->aerolinea_id = $request->aerolinea_id;
        $vuelo->ciudad_origen_id = $request->ciudad_origen_id;
        $vuelo->ciudad_destino_id = $request->ciudad_destino_id;

        $vuelo->precio = $request->precio;
        $vuelo->duracion_minutos = $request->duracion_minutos;
        $vuelo->no_escalas = $request->no_escalas;
        $vuelo->fecha_salida = $request->fecha_salida;
        $vuelo->fecha_llegada = $request->fecha_llegada;

        $vuelo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $vuelo = Vuelo::findOrFail($request->id);
        return $vuelo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request){
        $ciudad = Ciudad::findOrFail($request->id);

        $vuelo->codigo = $request->codigo;

        $vuelo->aerolinea_id = $request->aerolinea_id;
        $vuelo->ciudad_origen_id = $request->ciudad_origen_id;
        $vuelo->ciudad_destino_id = $request->ciudad_destino_id;

        $vuelo->precio = $request->precio;
        $vuelo->duracion_minutos = $request->duracion_minutos;
        $vuelo->no_escalas = $request->no_escalas;
        $vuelo->fecha_salida = $request->fecha_salida;
        $vuelo->fecha_llegada = $request->fecha_llegada;

        $vuelo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $vuelo = Vuelo::findOrFail($request->id);
        $vuelo->delete();
    }
}
