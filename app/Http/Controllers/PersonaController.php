<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

/**
 * Class PersonaController
 * @package App\Http\Controllers
 */
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tipo($tipo)
    {
        $personas = Persona::where('tipo',$tipo)->orderBY('tipo')->paginate();

        return view('persona.index', compact('personas'));
    }
    public function index()
    {
        $personas = Persona::orderBY('tipo')->paginate();

        return view('persona.index', compact('personas'))
            ->with('i', (request()->input('page', 1) - 1) * $personas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona = new Persona();
        return view('persona.create', compact('persona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Persona::$rules);
        $persona = Persona::create($request->all());

        /* $persona = Persona::create([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'direccion' => $request->direccion,
            'telef1' => $request->telef1,
            'telef2' => $request->telef2,
            'whatsapp' => $request->whatsapp,
            'telegram' => $request->telegram,
            'correo' => $request->correo,
            'tipo' => $request->tipo
        ]); */

        return redirect()->route('personas.index')->with('success', 'Creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function details(Persona $persona)
    {
        // $persona = Persona::where('id',$id)->firstOrFail();
        if ($persona->tipo == "Técnico"){
           // $tecnico =
            return view('persona.details1', compact('persona'));
        }else{
            return view('persona.details', compact('persona'));
        }


    }
    public function show($tipo)
    {
        $personas = Persona::where('tipo',$tipo)->orderBY('tipo')->paginate();

        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::where('id',$id)->firstOrFail();

        return view('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Persona $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        request()->validate(Persona::$rules);

        $persona->update($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Actualizado exitosamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $persona = Persona::find($id)->delete();

        return redirect()->route('personas.index')
            ->with('success', 'Eliminado exitosamente');
    }
}