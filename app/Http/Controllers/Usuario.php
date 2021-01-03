<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;

class Usuario extends Controller
{
    public function cadastrar()
    {
        return view('usuario.cadastro');
    }

    public function salvar(Request $request)
    {
        $request->validate([
            "nome" => "required",
            "email" => "required|email",
            "senha" => "required|min:5"
        ]);
        
        if (UsuarioModel::cadastrar($request))
        {
            return view('usuario.sucesso', [
                "usuario" => $request->nome
            ]);
        } else {
            echo "Ops! O seu cadastro falhou!";
        }
    }
}
