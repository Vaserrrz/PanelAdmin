<?php

namespace App\Http\Controllers;

use App\Models\Revendedor;
use Illuminate\Http\Request;

class Revendedores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revendedores = revendedor::paginate();
        return view('revendedores', compact('revendedores'));
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
        $revendedor = new revendedor();

        $revendedor->NOMBRE_RESELLER = $request->NOMBRE_RESELLER;
        $revendedor->NOC_RESELLER = $request->NOC_RESELLER;
        $revendedor->TELF_RESELLER = $request->TELF_RESELLER;
        $revendedor->TELF2_RESELLER = $request->TELF2_RESELLER;

        $revendedor->save();


        return redirect()->route('revendedores');
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
  /*  public function edit(revendedor $revendedor)
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
            $revendedor = revendedor::find($id);

            $revendedor->NOMBRE_RESELLER = $request->NOMBRE_RESELLER;
            $revendedor->NOC_RESELLER = $request->NOC_RESELLER;
            $revendedor->TELF_RESELLER = $request->TELF_RESELLER;
            $revendedor->TELF2_RESELLER = $request->TELF2_RESELLER;

            $revendedor->save();

            return redirect()->route('revendedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(revendedor $revendedor){
        $revendedor->delete();
        return redirect()->route('revendedores');
    }

}
