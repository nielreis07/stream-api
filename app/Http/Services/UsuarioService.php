<?php

namespace App\Http\Services;

use App\Models\Usuario;

class UsuarioService
{
    public function criarUsuario(array $data)
    {
        $usuario = new Usuario();
        $usuario->fill($data);
        $usuario->save();
        return $usuario;
    }

    public function atualizarUsuario(array $data, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($data);
        $usuario->save();
        return $usuario;
    }

    public function deletarUsuario($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return $usuario;
    }

    public function buscarUsuarioPorId($id)
    {
        $usuario = Usuario::find($id);
        return $usuario;
    }

}