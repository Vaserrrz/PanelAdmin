<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnicos = tecnico::paginate();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($ID)
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
    public function update(Request $request, $id)
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
