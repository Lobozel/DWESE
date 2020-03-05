<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $opciones=[
            'A~F',
            'G~L',
            'M~Q',
            'R~V',
            'W~Z'
        ];
        $apellido=$request->apellidos;
        $clientes=Cliente::orderBy('apellidos')
        ->apellidos($apellido)
        ->paginate(5);
        return view('clientes.index',compact('clientes','opciones','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('clientes.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $datos=$request->validated();

        $cliente = new Cliente;
        $cliente->nombre=trim(ucwords($datos['nombre']));
        $cliente->apellidos=trim(ucwords($datos['apellidos']));
        $cliente->mail=trim($datos['mail']);

        if($request->has('perfil')){
            $request->validate([
                'perfil'=>'image'
            ]);
            $file=$request->file('perfil');
            $nombre='clientes/'.time().'_'.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));

            $cliente->perfil="img/$nombre";
        }

        $cliente->save();

        return redirect()->route('clientes.index')->with('mensaje','Cliente creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, Cliente $cliente)
    {
        if($request->has('perfil')){
            $request->validate([
                'perfil'=>'image'
            ]);
            $file=$request->file('perfil');
            $nombre='clientes/'.time().'_'.$file->getClientOriginalName();
            Storage::disk('public')->put($nombre, \File::get($file));
            if(basename($cliente->perfil)!='default.jpg' && file_exists(public_path().'/'.$cliente->perfil)){
                unlink(public_path().'/'.$cliente->perfil);
            }

            $cliente->update($request->all());
            $cliente->update(['perfil'=>"img/$nombre"]);
        }else{
            $cliente->update($request->all());
        }

        $cliente->update();

        return redirect()->route('clientes.index')->with('mensaje','Cliente actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        if(basename($cliente->perfil)!='default.jpg' && file_exists(public_path().'/'.$cliente->perfil)){
            unlink(public_path().'/'.$cliente->perfil);
        }
        $cliente->delete();
        return redirect()->route('clientes.index')->with('mensaje','Cliente borrado');

    }
}
