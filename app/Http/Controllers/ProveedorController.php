<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores', compact('proveedores'));
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
        $proveedor = new proveedor();
        $proveedor->CI_RIF  = $request->CI_RIF ;
        $proveedor->RAZON = $request->RAZON;
        $proveedor->DIRECCION = $request->DIRECCION;
        $proveedor->CONTACTO  = $request->CONTACTO ;
        $proveedor->METODO_PAGO = $request->METODO_PAGO;
        $proveedor->DETALLE_PAGO = $request->DETALLE_PAGO;
        $proveedor->PROVEEDOR_CORREO  = $request->PROVEEDOR_CORREO ;
        $proveedor->save();


        return redirect()->route('proveedores');
    }

    public function details(PROVEEDOR $PROVEEDOR, $id)
    {
         $proveedor = proveedor::find($id);

        return view('details.proveedores', compact('proveedor'));

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
  /*  public function edit(proveedor $proveedor)
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
            $proveedor = proveedor::find($id );
            $proveedor->CI_RIF  = $request->CI_RIF ;
            $proveedor->RAZON = $request->RAZON;
            $proveedor->DIRECCION = $request->DIRECCION;
            $proveedor->CONTACTO  = $request->CONTACTO ;
            $proveedor->METODO_PAGO = $request->METODO_PAGO;
            $proveedor->DETALLE_PAGO = $request->DETALLE_PAGO;
            $proveedor->PROVEEDOR_CORREO  = $request->PROVEEDOR_CORREO ;
            $proveedor->save();
            return redirect()->route('proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor){
        $proveedor->delete();
        return redirect()->route('proveedores');
    }

}

