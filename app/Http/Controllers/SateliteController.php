<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\Revendedor;
use App\Models\Satelite;
use Illuminate\Http\Request;

class SateliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Proveedor $proveedor,Revendedor $revendedor)
    {
        $satelites = satelite::paginate();
        $proveedores = Proveedor::all();
        $revendedores = Revendedor::all();
        return view('satelites', compact('revendedores','proveedores','satelites'));
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
    public function store(Request $request, Proveedor $proveedor, Revendedor $revendedor)
    {

        $request->validate([
            'SAT_NOMBRE' => 'required',
            'SAT_BANDAS' => 'required',

        ]);
        $satelite = new satelite();
        $proveedor = $proveedor::all();
        $revendedor = $revendedor::all();
        $satelite->SAT_NOMBRE = $request->SAT_NOMBRE;
        $satelite->SAT_DESCRIPCION = $request->SAT_DESCRIPCION;
        $satelite->SAT_AZNUT = $request->SAT_AZNUT;
        $satelite->SAT_ELEVACION = $request->SAT_ELEVACION;
        $satelite->SAT_LNB = $request->SAT_LNB;
        $satelite->SAT_FRECUENCIA = $request->SAT_FRECUENCIA;
        $satelite->SAT_BANDAS = $request->SAT_BANDAS;
        $satelite->RESELLER_ID = $request->SELECT_REVENDEDOR;
        $satelite->proveedor_id = $request->SELECT_PROVEEDOR;
        $satelite->save();
        return redirect()->route('satelites');
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
  /*  public function edit(satelite $satelite)
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
            $satelite = satelite::find($id);
            $request->validate([
                'SAT_NOMBRE' => 'required',
                'SAT_BANDAS' => 'required',

            ]);
            $satelite->SAT_NOMBRE = $request->SAT_NOMBRE;
            $satelite->SAT_DESCRIPCION = $request->SAT_DESCRIPCION;
            $satelite->SAT_AZNUT = $request->SAT_AZNUT;
            $satelite->SAT_ELEVACION = $request->SAT_ELEVACION;
            $satelite->SAT_LNB = $request->SAT_LNB;
            $satelite->SAT_FRECUENCIA = $request->SAT_FRECUENCIA;
            $satelite->SAT_BANDAS = $request->SAT_BANDAS;
            $satelite->RESELLER_ID = $request->SELECT_RESELLER_ME;
            $satelite->proveedor_id = $request->SELECT_PROVEEDOR_ME;
            $satelite->save();

            return redirect()->route('satelites');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(satelite $satelite){
        $satelite->delete();
        return redirect()->route('satelites');
    }
}
