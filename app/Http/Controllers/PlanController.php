<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Proveedor;
use App\Models\Persona;
use App\Models\Satelite;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $planes = Plan::all();
        $revendedores = Persona::all();
        $proveedor = Proveedor::all();
        $satelites = Satelite::all();

        $proveedores = Proveedor::has('satelites')->get();

        return view('planes', compact('planes','revendedores','proveedores','satelites'));
    }
    public function getSatelites(Request $request)
    {
        $proveedor_id = $request->PROVEEDOR_ID;
        $satelites = Satelite::has('planes')->get();
        $satelites = Satelite::whereHas('planes', function ($query) use($proveedor_id) {
            $query->where('PROVEEDOR_ID', '=',$proveedor_id);
        })->get();

        return response()->json($satelites);
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

     // , Revendedor $revendedor
    public function store(Request $request)
    {
        $plan = new plan();
        //$revendedor = Persona::all();

        // $request->validate([
        //     'PLAN_NOMBRE' => 'required',
        //     'PLAN_SUBIDA' => 'required',
        //     'PLAN_BAJADA' => 'required',
        //     'PLAN_CONTENCION' => 'required',
        //     'PLAN_COSTO' => 'required',
        //     'PLAN_PRECIO' => 'required',
        //     'RESELLER_ID' => 'required',
        //     'SATELITE_ID' => 'required',
        // ]);

        $plan->plan_NOMBRE = $request->PLAN_NOMBRE;
        $plan->plan_SUBIDA = $request->PLAN_SUBIDA;
        $plan->plan_BAJADA  = $request->PLAN_BAJADA ;
        $plan->plan_CONTENCION = $request->PLAN_CONTENCION;
        $plan->plan_COSTO = $request->PLAN_COSTO;
        $plan->plan_PRECIO  = $request->PLAN_PRECIO;
        $plan->RESELLER_ID = $request->SELECT_REVENDEDOR;
        $plan->SATELITE_ID = $request->SELECT_SATELITE;

        $plan->save();


        return redirect()->route('planes');
    }
    public function details(plan $plan, proveedor $proveedor, persona $revendedor)
    {
        $satelite = Satelite::where('id',$plan->SATELITE_ID)->first();

        $proveedor = Proveedor::select('razon as nombre')->where('id',$satelite->proveedor_id)->first();

        $revendedor = Persona::select('nombre')->where('id',$plan->RESELLER_ID)->first();

        return view('details.planes', compact('plan','proveedor','revendedor'));

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
  /*  public function edit(plan $plan)
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
        // $request->validate([
        //     'PLAN_NOMBRE' => 'required',
        //     'PLAN_SUBIDA' => 'required',
        //     'PLAN_BAJADA' => 'required',
        //     'PLAN_CONTENCION' => 'required',
        //     'PLAN_COSTO' => 'required',
        //     'PLAN_PRECIO' => 'required',
        //     'RESELLER_ID' => 'required',
        //     'SATELITE_ID' => 'required',
        // ]);

        $plan = plan::find($id);
        $plan->plan_NOMBRE = $request->PLAN_NOMBRE;
        $plan->plan_SUBIDA = $request->PLAN_SUBIDA;
        $plan->plan_BAJADA  = $request->PLAN_BAJADA ;
        $plan->plan_CONTENCION = $request->PLAN_CONTENCION;
        $plan->plan_COSTO = $request->PLAN_COSTO;
        $plan->plan_PRECIO  = $request->PLAN_PRECIO;
        $plan->SATELITE_ID = $request->SELECT_SATELITE_ME;
        $plan->RESELLER_ID = $request->SELECT_REVENDEDOR_ME;
        $plan->save();
        return redirect()->route('planes');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(plan $plan){
        $plan->delete();
        return redirect()->route('planes');
    }
}