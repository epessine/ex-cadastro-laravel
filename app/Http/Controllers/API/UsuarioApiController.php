<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;

class UsuarioApiController extends Controller
{
    public function salvar(Request $request)
    {
        if (UsuarioModel::cadastrar($request))
        {
            return response("ok", 200);
        } else {
            return response("error", 409);
        }
    }
}
