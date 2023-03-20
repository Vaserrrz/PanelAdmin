<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remota;
use App\Models\Plan;
use App\Models\Cliente;

/**
 * Summary of RemotaController
 */
class RemotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remotas = Remota::all();
        return view('remotas', compact('remotas'));
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


        $request->validate([
            'REMOTA_NODO' => 'required',
            'REMOTA_EQUIPO' => 'required'
        ]);


        $remota = new remota();

        $remota->REMOTA_NODO = $request->REMOTA_NODO;
        $remota->REMOTA_EQUIPO = $request->REMOTA_EQUIPO;
        $remota->REMOTA_SERIAL = $request->REMOTA_SERIAL;
        $remota->REMOTA_COORDENADA = $request->REMOTA_COORDENADA;
        $remota->REMOTA_BUC = $request->REMOTA_BUC;
        $remota->REMOTA_BUC_SERIAL = $request->REMOTA_BUC_SERIAL;
        $remota->REMOTA_LNB = $request->REMOTA_LNB;
        $remota->REMOTA_LNB_SERIAL = $request->REMOTA_LNB_SERIAL;
        $remota->REMOTA_PLANDOWN = $request->REMOTA_PLANDOWN;
        $remota->REMOTA_PLANUP = $request->REMOTA_PLANUP;
        $remota->REMOTA_COSTO_PLAN = $request->REMOTA_COSTO_PLAN;
        $remota->REMOTA_RENTA = $request->REMOTA_RENTA;
        $remota->REMOTA_DIA_CORTE = $request->REMOTA_DIA_CORTE;
        $remota->REMOTA_DIA_ACTIVACION = $request->REMOTA_DIA_ACTIVACION;
        $remota->REMOTA_DETALLE = $request->REMOTA_DETALLE;
        $remota->REMOTA_PLATO = $request->REMOTA_PLATO;
        $remota->REMOTA_IP_MODEM = $request->REMOTA_IP_MODEM;
        $remota->REMOTA_IP_GESTION = $request->REMOTA_IP_GESTION;
        $remota->REMOTA_STATUS = $request->REMOTA_STATUS;
        $remota->REMOTA_BONDA = $request->REMOTA_BONDA;




        $remota->save();


        return redirect()->route('remotas');
    }




    public function details(remota $remota,Plan $plan,Cliente $cliente)
    {
        $cliente = $cliente::all();
        $plan = $plan::all();
        return view('details.remotas', compact('remota','cliente','plan'));

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
  /*  public function edit(remota $remota)
    {


    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remota $remota)
    {


            $remota->REMOTA_NODO = $request->REMOTA_NODO;
            $remota->REMOTA_EQUIPO = $request->REMOTA_EQUIPO;
            $remota->REMOTA_SERIAL = $request->REMOTA_SERIAL;
            $remota->REMOTA_COORDENADA = $request->REMOTA_COORDENADA;
            $remota->REMOTA_BUC = $request->REMOTA_BUC;
            $remota->REMOTA_BUC_SERIAL = $request->REMOTA_BUC_SERIAL;
            $remota->REMOTA_LNB = $request->REMOTA_LNB;
            $remota->REMOTA_LNB_SERIAL = $request->REMOTA_LNB_SERIAL;
            $remota->REMOTA_PLANDOWN = $request->REMOTA_PLANDOWN;
            $remota->REMOTA_PLANUP = $request->REMOTA_PLANUP;
            $remota->REMOTA_COSTO_PLAN = $request->REMOTA_COSTO_PLAN;
            $remota->REMOTA_RENTA = $request->REMOTA_RENTA;
            $remota->REMOTA_DIA_CORTE = $request->REMOTA_DIA_CORTE;
            $remota->REMOTA_DIA_ACTIVACION = $request->REMOTA_DIA_ACTIVACION;
            $remota->REMOTA_DETALLE = $request->REMOTA_DETALLE;
            $remota->REMOTA_PLATO = $request->REMOTA_PLATO;
            $remota->REMOTA_IP_MODEM = $request->REMOTA_IP_MODEM;
            $remota->REMOTA_IP_GESTION = $request->REMOTA_IP_GESTION;
            $remota->REMOTA_STATUS = $request->REMOTA_STATUS;
            $remota->REMOTA_BONDA = $request->REMOTA_BONDA;

            $remota->save();

            return redirect()->route('remotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(remota $remota){
        $remota->delete();
        return redirect()->route('remotas');
    }

}

