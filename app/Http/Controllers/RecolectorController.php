<?php

namespace App\Http\Controllers;

use App\Recolector;
use App\Punto;
use Illuminate\Http\Request;

class RecolectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recolectores = Recolector::all();
        return view('recolectores')->with('recolectores', $recolectores);
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
        $recolector = new Recolector;
        $recolector->nombre=$request->nombre;
        $recolector->dias=$request->dias;
        $recolector->save();

        return redirect('/recolectores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function show(Recolector $recolector)
    {
        $recolectores = Recolector::find($id);
        //$puntos = Punto::where('id')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //buscar el dato
        $recolector = Recolector::find($id); 
        //pasar el dato a la vista
        return view('editarecolector')->with('recolector', $recolector);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $recolector = Recolector::find($request->id);
        if(!is_null($recolector)){
            $recolector->nombre = $request->nombre;
            $recolector->dias = $request->dias;
            $recolector->save(); 
        }
        return redirect('/recolectores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recolector = Recolector::find($id);
        $recolector->delete();
        return redirect('/recolectores');
    }
}
