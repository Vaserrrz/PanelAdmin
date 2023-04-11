<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Remota;
use App\Models\Plan;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Socio;
use App\Models\Revendedor;
use App\Models\Encargado;
use App\Models\Satelite;

/**
 * Summary of RemotaController
 */
class RemotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(plan $plan,cliente $cliente, Proveedor $proveedor,
    Socio $socio, Revendedor $revendedor, Encargado $encargado,Satelite $satelite)
    {
        $plan = Plan::all();
        $remotas = Remota::all();
        $clientes = Cliente::all();
        $proveedores = Proveedor::all();
        $socios = Socio::all();
        $revendedores = Revendedor::all();
        $encargados = Encargado::all();
        $satelites = Satelite::all();

        return view('remotas', compact('remotas','plan','remotas','clientes','proveedores',
        'socios','revendedores','encargados','satelites'));
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

        $remota->CLIENTE_ID = $request->CLIENTE_ID;
        $remota->PLAN_ID = $request->PLAN_ID;
        $remota->PROVEEDOR_ID = $request->PROVEEDOR_ID;
        $remota->SOCIO_ID = $request->SOCIO_ID;
        $remota->RESELLER_ID = $request->RESELLER_ID;
        $remota->ENCARGADO_ID = $request->ENCARGADO_ID;
        $remota->SATELITE_ID = $request->SATELITE_ID;





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

