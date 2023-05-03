<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //return view('productos.index');
        $productos= producto::get();
        $categorias= categoria::get();
        return view('productos.index', compact('productos'),compact('categorias'));
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias= categoria::get();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_prod'=>['required'],
            'nombre'=>['required'],
            'descripcion'=>['required'],
            'categoria'=>['required'],
            'precio'=>['required'],
            'existencias'=>['required'],
            'imagen'=>['required']
        ]);
        
        $producto=new Producto();
        $producto->id_prod = $request->input('id_prod');
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->categoria = $request->option('categoria');
        $producto->precio = $request->input('precio');
        $producto->existencias = $request->input('existencias');
        $producto->imagen = $request->input('imagen');
        $producto->save();
        return to_route('productos.index');
    }
    
/**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $autor
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    public function edit(Producto $producto)
    {
    
        $productos= producto::get();
        $categorias= categoria::get();
        return view('productos.edit', compact('producto'),compact('categorias'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'id_prod'=>['required'],
            'nombre'=>['required'],
            'descripcion'=>['required'],
            'categoria'=>['required'],
            'precio'=>['required'],
            'existencias'=>['required'],
            'imagen'=>['required']
        ]);

        $input = $request->all();

        $producto->update($input);

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
