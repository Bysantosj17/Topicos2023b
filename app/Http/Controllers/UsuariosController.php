<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function InicioUsuarios(){
        return view('usuarios.inicio_usuarios');
    }
}
