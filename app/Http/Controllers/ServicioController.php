<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Servicio;
use App\Especialidad;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios= Servicio::join('especialidades','servicio.especialidad_id','=', 'especialidades.id')
        ->select('servicio.id','servicio.servicio','servicio.descripcion','servicio.especialidad_id','especialidades.id')
        ->orderBy('servicio.id','desc')->get();
        return $servicios;
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
    public function store(Request $request)
    {
        $servicios = new Servicio();
        $especialidad = Especlalidad::FindOrFail($request->especialidad_id);
        $servicios->servicio = $requers->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->especialidad()->associate($especialidad);
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
    public function update(Request $request)
    {
        $especialidad = Especlalidad::FindOrFail($request->especialidad_id);
        $servicios->servicio= $requers->nombre;
        $servicio->descripcion = $request->descripcion;
        $servicio->especialidad()->associate($especialidad);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $reques)
    {
        Servicios::destroy($request->id);
    }
}
