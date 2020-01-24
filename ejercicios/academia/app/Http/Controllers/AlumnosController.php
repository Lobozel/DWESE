<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;
use Session;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function mostrarTodos(){
        $alumnos=Alumnos::paginate(5);
        return view('alumnos.listado', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Valida
        $request->validate([
            'nombre' => 'required',
            'apellidos'=> 'required',
            'email' => 'required|unique:alumnos',
            'direccion' => 'required'
        ]);
        //Crea
        Alumnos::create($request->all());
        //Guarda mensaje en session
        Session::flash('mensaje','Alumno dado de Alta Correctamente.');
        //Vuelve a la lista de alumnos
        return redirect()->route('alumnos.listado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumnos $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //Valida
        $request->validate([
            'nombre' => 'required',
            'apellidos'=> 'required',
            'email' => 'required|unique:alumnos',
            'direccion' => 'required'
        ]);
        //Actualiza
        Alumnos::update($request->all());
        //Guarda mensaje en session
        Session::flash('mensaje','Alumno Modificado Correctamente.');
        //Vuelve a la lista de alumnos
        return redirect()->route('alumnos.listado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumnos $alumno)
    {
        $alumno->delete();
        Session::flash('mensaje','Alumno Borrado Correctamente.');
        return redirect()->route('alumnos.listado');
    }
}
