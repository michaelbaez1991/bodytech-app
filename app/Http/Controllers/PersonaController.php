<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Departamento;
use App\Models\Municipio;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('personas.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, 
        [ 
            'identificacion' => 'required|string|min:7|max:30|unique:App\Models\Persona',
            'tipo_identificacion' => 'required|string|min:2|max:4',
            'primer_nombre' => 'required|string|max:30',
            'segundo_nombre' => 'required|string|max:30',
            'primer_apellido' => 'required|string|max:30',
            'segundo_apellido' => 'required|string|max:30',   
            'direccion' => 'required|string|max:100', 
            'telefono' => 'required|numeric|digits_between:1,12|unique:App\Models\Persona',
            'correo' => 'required|email|unique:App\Models\Persona',
            'ocupacion' => 'required|string|max:100', 
            'departamento_id' => 'required|integer',
            'municipio_id' => 'required|integer'
        ]);

        $persona = Persona::create($request->all());
        
        // if (Persona::all()->count() >= 5 ) {
        //     $ganador = Persona::inRandomOrder()->first();
        //     return redirect()->route('readRegister')->with('winner',  compact('ganador'));
        // }else{
            return redirect()->route('personas.index')->with('success',  'Registro completado exitosamente');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);
        $departamentos = Departamento::all();

        // return view('personas.edit')->with('persona', $persona);
        return view('personas.edit', compact('departamentos', 'persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);        
        $persona->delete();

        return redirect('/clientes');
    }
}
