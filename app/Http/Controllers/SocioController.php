<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = Socio::paginate();
        return view('socios', compact('socios'));
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
        $socio = new Socio();

        $socio->SOCIO_NOMBRE = $request->SOCIO_NOMBRE;
        $socio->CI_SOCIO = $request->CI_SOCIO;
        $socio->TELF_SOCIO = $request->TELF_SOCIO;
        $socio->SOCIO_CORREO = $request->SOCIO_CORREO;

        $socio->save();


        return redirect()->route('socios');
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
  /*  public function edit(socio $socio)
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
            $socio = socio::find($id);

            $socio->SOCIO_NOMBRE = $request->SOCIO_NOMBRE;
            $socio->CI_SOCIO = $request->CI_SOCIO;
            $socio->TELF_SOCIO = $request->TELF_SOCIO;
            $socio->SOCIO_CORREO = $request->SOCIO_CORREO;

            $socio->save();

            return redirect()->route('socios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(socio $socio){
        $socio->delete();
        return redirect()->route('socios');
    }

}
