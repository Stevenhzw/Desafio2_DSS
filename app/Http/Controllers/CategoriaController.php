<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return view('categorias.index');
        $categorias= categoria::get();
        return view('categorias.index', compact('categorias'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>['required']
        ]);
        
        $cate=new Categoria();
        $cate->nombre = $request->input('nombre');
        $cate->save();
        return to_route('categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('categorias.show', ['categorias' => $categorias]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        $categorias= categoria::get();
        return view('categorias.edit',compact('categoria'));

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required'
        ]);

        $input = $request->all();

        $categoria->update($input);

        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
