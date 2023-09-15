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

        $mikrotik->mk_nombre = $request->MK_NOMBRE;
        $mikrotik->mk_ip = $request->MK_IP;
        $mikrotik->mk_serial  = $request->MK_SERIAL ;
        $mikrotik->mk_identify = $request->MK_IDENTITY;
        $mikrotik->mk_model = $request->MK_MODEL;
        $mikrotik->mk_vpn_user  = $request->MK_VPNUSER;
        $mikrotik->mk_vpn_password = $request->MK_VPNPASSWORD;
        $mikrotik->mk_vpn_server = $request->MK_VPNSERVER;
        $mikrotik->mk_ethr_corte1  = $request->MK_ETHRCORTE1 ;
        $mikrotik->mk_ethr_corte2 = $request->MK_ETHRCORTE2;
        $mikrotik->mk_usuario = $request->MK_USUARIO;
        $mikrotik->mk_clave  = $request->MK_CLAVE;
        $mikrotik->mk_puerto = $request->MK_PUERTO;
        $mikrotik->mk_protocolo  = $request->MK_PROTOCOLO;

        $mikrotik->save();

        return redirect()->route('mikrotiks');
    }

    public function details(mikrotik $mikrotik, $id)
    {
         $mikrotik = mikrotik::find($id);

        return view('details.mikrotiks', compact('mikrotik'));

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
            $mikrotik = mikrotik::find($id);

            $mikrotik->mk_nombre = $request->MK_NOMBRE;
            $mikrotik->mk_ip = $request->MK_IP;
            $mikrotik->mk_serial  = $request->MK_SERIAL ;
            $mikrotik->mk_identify = $request->MK_IDENTITY;
            $mikrotik->mk_model = $request->MK_MODEL;
            $mikrotik->mk_vpn_user  = $request->MK_VPNUSER;
            $mikrotik->mk_vpn_password = $request->MK_VPNPASSWORD;
            $mikrotik->mk_vpn_server = $request->MK_VPNSERVER;
            $mikrotik->mk_ethr_corte1  = $request->MK_ETHRCORTE1 ;
            $mikrotik->mk_ethr_corte2 = $request->MK_ETHRCORTE2;
            $mikrotik->mk_usuario = $request->MK_USUARIO;
            $mikrotik->mk_clave  = $request->MK_CLAVE;
            $mikrotik->mk_puerto = $request->MK_PUERTO;
            $mikrotik->mk_protocolo  = $request->MK_PROTOCOLO;

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