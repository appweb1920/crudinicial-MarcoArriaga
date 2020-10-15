<?php

namespace App\Http\Controllers;

use App\Punto;
use Illuminate\Http\Request;

class PuntosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntos = Punto::all();
        return($puntos);
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
        $punto = new Recolector;
        $punto->tipo = $request->tipo;
        $punto->direccion = $request->direccion;
        $punto->horaApertura = $request->horaApertura;
        $punto->horaCierre = $request->horaCierre;
        $punto->save();

        return redirect('/puntos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function show(Punto $punto)
    {
        $puntos = Punto::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //buscar el dato
        $punto = Punto::find($id); 
        //pasar el dato a la vista
        return view('editapunto')->with('punto', $punto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $punto = Recolector::find($request->id);
        if(!is_null($punto)){
            $punto->tipo = $request->tipo;
            $punto->direccion = $request->direccion;
            $punto->horaApertura = $request->horaApertura;
            $punto->horaCierre = $request->horaCierre;
            $punto->save(); 
        }
        return redirect('/puntos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Punto  $punto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $punto = Punto::find($id);
        $punto->delete();
        return redirect('/puntos');
    }
}
