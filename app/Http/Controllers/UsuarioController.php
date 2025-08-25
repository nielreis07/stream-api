<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\UsuarioService;

class UsuarioController
{
    public function criarUsuario(Request $request)
    {
        $usuarioService = new UsuarioService();
        $usuario = $usuarioService->criarUsuario($request->all());
        return response()->json($usuario, 201);
    }

    public function atualizarUsuario(Request $request, $id)
    {
        $usuarioService = new UsuarioService();
        $usuario = $usuarioService->atualizarUsuario($request->all(), $id);
        return response()->json($usuario, 200);
    }
    
    public function deletarUsuario($id)
    {
        $usuarioService = new UsuarioService();
        $usuario = $usuarioService->deletarUsuario($id);
        return response()->json($usuario, 200);
    }
    
    public function buscarUsuarioPorId($id)
    {
        $usuarioService = new UsuarioService();
        $usuario = $usuarioService->buscarUsuarioPorId($id);
        return response()->json($usuario, 200);
    }
    
}