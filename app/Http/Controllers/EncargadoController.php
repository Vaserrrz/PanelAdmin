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
     *
     */
    public function index(Cliente $cliente)
    {

        $encargados = Encargado::all();
        $clientes = Cliente::all();

        return view('encargados', compact('clientes','encargados'));
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
    public function store(Request $request,Cliente $cliente)
    {
        $request->validate([
            'ENCARGADO_NOMBRE' => 'required',
            'ENCARGADO_TELF' => 'required',
        ]);

        $encargado = new encargado();
        $cliente = Cliente::all();
        $encargado->ENCARGADO_NOMBRE = $request->ENCARGADO_NOMBRE;
        $encargado->ENCARGADO_CORREO = $request->ENCARGADO_CORREO;
        $encargado->ENCARGADO_TELF = $request->ENCARGADO_TELF;
        $encargado->CLIENTE_ID = $request->SELECT_CLIENTE;


        $encargado->save();

        return redirect()->route('encargados',compact('cliente'));
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
     *
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
        // $request->validate([
        //     'ENCARGADO_NOMBRE' => 'required',
        //     'ENCARGADO_TELF' => 'required',
        // ]);

        $encargado = encargado::find($id);
        $encargado->ENCARGADO_NOMBRE = $request->ENCARGADO_NOMBRE;
        $encargado->ENCARGADO_CORREO = $request->ENCARGADO_CORREO;
        $encargado->ENCARGADO_TELF = $request->ENCARGADO_TELF;
        $encargado->CLIENTE_ID = $request->SELECT_CLIENTE_ME;
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



