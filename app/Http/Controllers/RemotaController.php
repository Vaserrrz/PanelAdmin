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
use Termwind\Components\Dd;

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
    public function index()
    {
        $remotas = Remota::all();
        $socios = Socio::all();
        $revendedores = Revendedor::all();
        $cliente = Cliente::all();
        // $proveedor = Proveedor::all();
        // $satelite = Satelite::all();

        $proveedores = Proveedor::has('satelites')->get();
        $clientes = Cliente::has('encargados')->with('encargados')->get();
        $satelites = Satelite::all();
        $planes = Plan::all();
        $encargados = Encargado::all();



        return view('Remotas', compact('remotas','remota','planes','remotas','clientes','proveedores',
        'socios','revendedores','encargados','satelites'));
    }
    /**
     * Summary of getSatelites
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSatelites(Request $request)
    {
        // $satelites = Satelite::where('PROVEEDOR_ID', $request->PROVEEDOR_ID)->get();
        $proveedor_id = $request->PROVEEDOR_ID;
        $satelites = Satelite::whereHas('proveedor', function ($query) use($proveedor_id) {
            $query->where('PROVEEDOR_ID', $proveedor_id);
        })->whereHas('planes')->get();
        return response()->json($satelites);
    }
    public function getPlan(Request $request)
    {
        $Plan = Plan::where('SATELITE_ID', $request->SATELITE_ID)->get();
        return response()->json($Plan);
    }
    public function getEncargado(Request $request){
        $encargado = Encargado::where('CLIENTE_ID', $request->CLIENTE_ID)->get();
        return response()->json($encargado);
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
        $remota->REMOTA_STATUS = $request->REMOTA_STATUS== 'on'? 1:0;
        $remota->REMOTA_BONDA = $request->REMOTA_BONDA;
        $remota->CLIENTE_ID = $request->SELECT_CLIENTE;
        $remota->PLAN_ID = $request->SELECT_PLAN;
        $remota->PROVEEDOR_ID = $request->SELECT_PROVEEDOR;
        $remota->SOCIO_ID = $request->SELECT_SOCIO;
        $remota->RESELLER_ID = $request->SELECT_RESELLER;
        $remota->ENCARGADO_ID = $request->SELECT_ENCARGADO;
        $remota->SATELITE_ID = $request->SELECT_SATELITE;
        $remota->save();
        return redirect()->route('remotas', compact('remota'));
    }
    public function details(remota $remota,Plan $plan,Cliente $cliente, Socio $socio,
     Proveedor $proveedor, Revendedor $revendedor, Encargado $encargado, Satelite $satelite)
    {
        $cliente = $cliente::all();
        $plan = $plan::all();
        $socio = $socio::all();
        $proveedor = $proveedor::all();
        $revendedor = $revendedor::all();
        $encargado = $encargado::all();
        $satelite = $satelite::all();

        return view('details.remotas', compact('remota','cliente','plan','socio','proveedor','revendedor','encargado','satelite'));

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

            $remota->CLIENTE_ID = $request->SELECT_CLIENTE;
            $remota->PLAN_ID = $request->SELECT_PLAN;
            $remota->PROVEEDOR_ID = $request->SELECT_PROVEEDOR;
            $remota->SOCIO_ID = $request->SELECT_SOCIO;
            $remota->RESELLER_ID = $request->SELECT_RESELLER;
            $remota->ENCARGADO_ID = $request->SELECT_ENCARGADO;
            $remota->SATELITE_ID = $request->SELECT_SATELITE;

            $remota->save();

            return redirect()->route('remotas', compact('remota'));
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

