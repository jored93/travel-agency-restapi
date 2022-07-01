<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aerolinea;

class AerolineaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $aerolinea = Aerolinea::all();
        return $aerolinea;
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
        $aerolinea = new Aerolinea();
        $aerolinea->nombre = $request->nombre;
        $aerolinea->telefono = $request->telefono;
        $aerolinea->email = $request->email;
        $aerolinea->direccion = $request->direccion;

        $aerolinea->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $aerolinea = Aerolinea::findOrFail($request->id);
        return $aerolinea;
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
        $aerolinea = new Aerolinea();
        $aerolinea->nombre = $request->nombre;
        $aerolinea->telefono = $request->telefono;
        $aerolinea->email = $request->email;
        $aerolinea->direccion = $request->direccion;

        $aerolinea->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $aerolinea = Aerolinea::destroy($request->id);
        return $aerolinea;
    }
}
