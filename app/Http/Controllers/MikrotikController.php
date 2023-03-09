<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mikrotik;

class MikrotikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mikrotiks = mikrotik::all();
        return view('mikrotiks', compact('mikrotiks'));
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
        $mikrotik = new mikrotik();

        $mikrotik->MK_NOMBRE = $request->MK_NOMBRE;
        $mikrotik->MK_IP = $request->MK_IP;
        $mikrotik->MK_SERIAL  = $request->MK_SERIAL ;
        $mikrotik->MK_IDENTITY = $request->MK_IDENTITY;
        $mikrotik->MK_MODEL = $request->MK_MODEL;
        $mikrotik->MK_VPNUSER  = $request->MK_VPNUSER;
        $mikrotik->MK_VPNPASSWORD = $request->MK_VPNPASSWORD;
        $mikrotik->MK_VPNSERVER = $request->MK_VPNSERVER;
        $mikrotik->MK_ETHRCORTE1  = $request->MK_ETHRCORTE1 ;
        $mikrotik->MK_ETHRCORTE2 = $request->MK_ETHRCORTE2;
        $mikrotik->MK_USUARIO = $request->MK_USUARIO;
        $mikrotik->MK_CLAVE  = $request->MK_CLAVE;
        $mikrotik->MK_PUERTO = $request->MK_PUERTO;
        $mikrotik->MK_PROTOCOLO  = $request->MK_PROTOCOLO;

        $mikrotik->save();

        return redirect()->route('mikrotiks');
    }

    public function details()
    {
        $mikrotiks = mikrotik::all();
        return view('detailsmikrotiks', compact('mikrotiks'));

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
  /*  public function edit(mikrotik $mikrotik)
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
            $mikrotik = mikrotik::find($id );

            $mikrotik->MK_NOMBRE = $request->MK_NOMBRE;
            $mikrotik->MK_IP = $request->MK_IP;
            $mikrotik->MK_SERIAL  = $request->MK_SERIAL ;
            $mikrotik->MK_IDENTITY = $request->MK_IDENTITY;
            $mikrotik->MK_MODEL = $request->MK_MODEL;
            $mikrotik->MK_VPNUSER  = $request->MK_VPNUSER;
            $mikrotik->MK_VPNPASSWORD = $request->MK_VPNPASSWORD;
            $mikrotik->MK_VPNSERVER = $request->MK_VPNSERVER;
            $mikrotik->MK_ETHRCORTE1  = $request->MK_ETHRCORTE1 ;
            $mikrotik->MK_ETHRCORTE2 = $request->MK_ETHRCORTE2;
            $mikrotik->MK_USUARIO = $request->MK_USUARIO;
            $mikrotik->MK_CLAVE  = $request->MK_CLAVE;
            $mikrotik->MK_PUERTO = $request->MK_PUERTO;
            $mikrotik->MK_PROTOCOLO  = $request->MK_PROTOCOLO;

            $mikrotik->save();
            return redirect()->route('mikrotiks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(mikrotik $mikrotik){
        $mikrotik->delete();
        return redirect()->route('mikrotiks');
    }

}
