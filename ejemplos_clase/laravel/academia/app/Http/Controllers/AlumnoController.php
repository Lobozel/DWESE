<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Modulo;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumno::orderBy('apellidos')->paginate(5);
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.detalle', compact('alumno'));
    }
    public function fmatricula(Alumno $alumno){
        //pluck crea un array, no con todos los campos, sino con uno en concreto
        //esto me devuelve los id de los módulos que tiene $alumno
        $modulos1=$alumno->modulos()->pluck('modulos_id');
        //esto me devuelve los módulos que le faltan al alumno
        $modulos2=Modulo::whereNotIn('id',$modulos1)->get();
        if($modulos2->count()==0){
            return redirect()->route('alumnos.show',$alumno)->with('mensaje','Este alumno ya está matriculado de todos los módulos.');
        }
        //cargamos el formulario matricular alumno le mando el alumno y los módulos que le faltan
        return view('alumnos.fmatricula',compact('alumno','modulos2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
