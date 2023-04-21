<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\Proveedor;
use App\Models\Revendedor;
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
        $planes = plan::all();
        $revendedores = Revendedor::all();
        $proveedor = Proveedor::all();

        $proveedores = Proveedor::has('satelites')->get();
        $satelites = Satelite::all();

        return view('planes', compact('planes','revendedores','proveedores','satelites'));
    }


    public function getSatelites(Request $request)
    {
        // $satelites = Satelite::where('PROVEEDOR_ID', $request->PROVEEDOR_ID)->get();
        $satelite = Satelite::where('PROVEEDOR_ID', $request->PROVEEDOR_ID)->get();
        return response()->json($satelite);
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
    public function store(Request $request, Revendedor $revendedor)
    {
        $plan = new plan();
        $revendedor = Revendedor::all();

        $plan->PLAN_NOMBRE = $request->PLAN_NOMBRE;
        $plan->PLAN_SUBIDA = $request->PLAN_SUBIDA;
        $plan->PLAN_BAJADA  = $request->PLAN_BAJADA ;
        $plan->PLAN_CONTENCION = $request->PLAN_CONTENCION;
        $plan->PLAN_COSTO = $request->PLAN_COSTO;
        $plan->PLAN_PRECIO  = $request->PLAN_PRECIO;
        $plan->PROVEEDOR_ID = $request->SELECT_PROVEEDOR;
        $plan->RESELLER_ID = $request->SELECT_REVENDEDOR;
        $plan->SATELITE_ID = $request->SELECT_SATELITE;

        $plan->save();


        return redirect()->route('planes',compact('revendedor'));
    }

    public function details(plan $plan, proveedor $proveedor, Revendedor $revendedor)
    {
        $proveedor = $proveedor::all();

        $revendedor = $revendedor::all();

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
            $plan = plan::find($id );

            $plan->PLAN_NOMBRE = $request->PLAN_NOMBRE;
            $plan->PLAN_SUBIDA = $request->PLAN_SUBIDA;
            $plan->PLAN_BAJADA  = $request->PLAN_BAJADA ;
            $plan->PLAN_CONTENCION = $request->PLAN_CONTENCION;
            $plan->PLAN_COSTO = $request->PLAN_COSTO;
            $plan->PLAN_PRECIO  = $request->PLAN_PRECIO;

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
