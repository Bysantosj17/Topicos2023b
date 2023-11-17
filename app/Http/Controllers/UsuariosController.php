<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function InicioUsuarios(){

        $usuarios = User::orderBy('id', 'desc')->paginate(10);

        return view('usuarios.inicio_usuarios', compact('usuarios'));
    }
}
