<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
    public function register()
    {
        return view('usuarios.register');
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
 
    public function login()
    {
        return view('usuarios.login');
    }
 
    public function loginPost(Request $request)
    {
       
        $input = $request->all();
     
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
            'estado' => 'required',
        ]);
     
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'estado' => $input['estado'])))
        {
            return redirect('/home')->with('success', 'Login Success');
        }else{
            return redirect()->route('login')
                ->with('error','Correo o contraseña incorrectos');
        }

    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}