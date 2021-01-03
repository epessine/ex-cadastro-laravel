<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function listar(int $limite)
    {
        $sql = self::select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])
        ->limit($limite);

        return $sql->get();
    }

    public static function cadastrar(Request $request)
    {
        return self::insert([
            "nome" => $request->nome,
            "email" => $request->email,
            "senha" => Hash::make($request->senha),
            "data_cadastro" => new Carbon()
        ]);
    }
}