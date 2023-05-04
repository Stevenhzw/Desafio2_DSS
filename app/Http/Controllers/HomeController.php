<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class HomeController extends Controller
{
    public function index()
    {
      //  return view('home');
      $productos= producto::get();
        $categorias= categoria::get();
        return view('home', compact('productos'),compact('categorias'));
    }

    public function admin()
    {
        return view('admin');
    }

    public function empleado()
    {
        return view('empleado');
    }
}
