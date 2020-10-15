<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recolector;
use App\detalle_recolector;
use DB;


class relacionController extends Controller
{
    public function index($idP)
    {
        $recolectores = Recolector::all();
        $relaciones = DB::table('detalle_recolector')
                    ->join('recolectores', function ($join) use ($idP) {
                        $join->on('recolectores.id', '=', 'detalle_recolector.id_recolector')
                            ->where('detalle_recolector.id_punto', '=', $idP);
                    })
                    ->get();
        return view('relaciones')->with('recolectores', $recolectores)->with('relaciones', $relaciones)->with('id',$idP);
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
        $relacion = new detalle_recolector;
        $relacion->id_recolector = $request->id_recolector;
        $relacion->id_punto = $request->id;
        $relacion->save();

        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recolector  $recolector
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('detalle_recolector')->where('id_recolector', $id)->delete();
        return redirect()->back();
    }
}
