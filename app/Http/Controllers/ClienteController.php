<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $clientes = Cliente::paginate();
        return view('clientes', compact('clientes'));
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
        $cliente = new Cliente();

        $request->validate([
            'CLIENTE_RAZON' => 'required',
            'CLIENTE_TELF' => 'required',
        ]);

        $cliente->CI_RIF = $request->CI_RIF;
        $cliente->CLIENTE_RAZON = $request->CLIENTE_RAZON;
        $cliente->CLIENTE_CORREO  = $request->CLIENTE_CORREO;
        $cliente->CLIENTE_DIRECCION = $request->CLIENTE_DIRECCION;
        $cliente->CLIENTE_DETALLE = $request->CLIENTE_DETALLE;
        $cliente->CLIENTE_TELF = $request->CLIENTE_TELF;
        $cliente->CLIENTE_TELF2 = $request->CLIENTE_TELF2;
        $cliente->CLIENTE_WHATSAPP = $request->CLIENTE_WHATSAPP;
        $cliente->CLIENTE_TELEGRAM = $request->CLIENTE_TELEGRAM;
        $cliente->ENVIO_TELEGRAM = $request->ENVIO_TELEGRAM;
        $cliente->ENVIO_WHATSAPP = $request->ENVIO_WHATSAPP;
        $cliente->save();


        return redirect()->route('clientes');
    }
    public function details(Cliente $cliente)
    {
        return view('details.clientes', compact('cliente'));

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
  /*  public function edit(Cliente $cliente)
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
            $cliente = Cliente::find($id);

            $request->validate([
                'CLIENTE_RAZON' => 'required',
                'CLIENTE_TELF' => 'required',
            ]);

            $cliente->CI_RIF = $request->CI_RIF;
            $cliente->CLIENTE_RAZON = $request->CLIENTE_RAZON;
            $cliente->CLIENTE_DIRECCION = $request->CLIENTE_DIRECCION;
            $cliente->CLIENTE_DETALLE = $request->CLIENTE_DETALLE;
            $cliente->CLIENTE_TELF = $request->CLIENTE_TELF;
            $cliente->CLIENTE_TELF2 = $request->CLIENTE_TELF2;
            $cliente->CLIENTE_WHATSAPP = $request->CLIENTE_WHATSAPP;
            $cliente->CLIENTE_TELEGRAM = $request->CLIENTE_TELEGRAM;
            $cliente->CLIENTE_CORREO  = $request->CLIENTE_CORREO ;
            $cliente->ENVIO_TELEGRAM = $request->ENVIO_TELEGRAM;
            $cliente->CLIENTE_CORREO  = $request->CLIENTE_CORREO ;
            $cliente->ENVIO_WHATSAPP = $request->ENVIO_WHATSAPP;

            $cliente->save();

            return redirect()->route('clientes');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect()->route('clientes');
    }

}
