<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tecnico;

/**
 * Summary of TecnicoController
 */
class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicos = tecnico::all();
        return view('tecnicos', compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tecnico = new tecnico();

        $tecnico->TECNICO_NOMBRE = $request->TECNICO_NOMBRE;
        $tecnico->TECNICO_CORREO = $request->TECNICO_CORREO;
        $tecnico->TECNICO_TELF = $request->TECNICO_TELF;
        $tecnico->TECNICO_TELF2 = $request->TECNICO_TELF2;
        $tecnico->ZONA_TRABAJO = $request->ZONA_TRABAJO;
        $tecnico->INCIDENCIA = $request->INCIDENCIA;
        $tecnico->REEMPLAZO = $request->REEMPLAZO;

        $tecnico->save();

        return redirect()->route('tecnicos');
    }

    public function details(tecnico $tecnico)
   {
    return $tecnico->TECNICO_CORREO;
    return view('details.tecnicos', compact('tecnico'));
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  /*  public function edit(tecnico $tecnico)
    {


    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
            $tecnico = tecnico::find($id);

            $tecnico->TECNICO_NOMBRE = $request->TECNICO_NOMBRE;
            $tecnico->TECNICO_CORREO = $request->TECNICO_CORREO;
            $tecnico->TECNICO_TELF = $request->TECNICO_TELF;
            $tecnico->TECNICO_TELF2 = $request->TECNICO_TELF2;
            $tecnico->ZONA_TRABAJO = $request->ZONA_TRABAJO;
            $tecnico->INCIDENCIA = $request->INCIDENCIA;
            $tecnico->REEMPLAZO = $request->REEMPLAZO;

            $tecnico->save();
            return redirect()->route('tecnicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tecnico $tecnico){
        $tecnico->delete();
        return redirect()->route('tecnicos');
    }

}

