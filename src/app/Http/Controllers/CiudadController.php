<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciudad;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $ciudades = Ciudad::all();
        return $ciudades;
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
        $ciudad = new Ciudad();
        $ciudad->nombre = $request->nombre;
        $ciudad->descripcion = $request->descripcion;
        $ciudad->image_url = $request->image_url;
        $ciudad->pais_id = $request->pais_id;

        $ciudad->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $ciudad = Ciudad::findOrFail($request->id);
        return $ciudad;
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
        $ciudad->nombre = $request->nombre;
        $ciudad->descripcion = $request->descripcion;
        $ciudad->image_url = $request->image_url;
        $ciudad->pais_id = $request->pais_id;

        $ciudad->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $ciudad = Ciudad::destroy($request->id);
        return $ciudad;
    }
}
