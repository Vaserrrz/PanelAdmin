<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encargado;
use App\Models\Cliente;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados = Encargado::all();
        return view('encargados', compact('encargados'));
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
        $encargado = new encargado();
        $encargado->ENCARGADO_NOMBRE = $request->ENCARGADO_NOMBRE;
        $encargado->ENCARGADO_CORREO = $request->ENCARGADO_CORREO;
        $encargado->ENCARGADO_TELF = $request->ENCARGADO_TELF;
        $encargado->save();


        return redirect()->route('encargados');
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
  /*  public function edit(encargado $encargado)
    {


    }*/
    public function details(Encargado $encargado, Cliente $cliente)
    {
        $cliente = $cliente::all();

        return view('details.encargados', compact('encargado','cliente'));

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
            $encargado = encargado::find($id);
            $encargado->ENCARGADO_NOMBRE = $request->ENCARGADO_NOMBRE;
            $encargado->ENCARGADO_CORREO = $request->ENCARGADO_CORREO;
            $encargado->                                                                              ENCARGADO_TELF = $request->ENCARGADO_TELF;
            $encargado->save();
            return redirect()->route('encargados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(encargado $encargado){
        $encargado->delete();
        return redirect()->route('encargados');
    }

}



