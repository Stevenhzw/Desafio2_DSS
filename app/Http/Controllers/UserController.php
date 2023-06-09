<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios= user::get();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->estado = $request->estado;
        $user->rol = $request->rol;
 
        $user->save();
 
        return back()->with('success', 'Register successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    

      public function store(Request $request)
    {
        $request->validate([
            
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required'],
            'estado'=>['required'],
            'rol'=>['required'],
        ]);
        
        $usuario=new User();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->estado = $request->input('estado');
        $usuario->rol = $request->input('rol');
        $usuario->save();
        return to_route('usuarios.index');  
      }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('usuarios.show', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        $usuarios= user::get();
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required'],
            'estado'=>['required'],
            'rol'=>['required']
        ]);

        $input = $request->all();

        $usuario->update($input);

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')
                        ->with('success','usuario eliminado exitosamente');
    }
}
