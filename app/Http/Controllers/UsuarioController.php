<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //uso de rutas
    public function usuariounparametro($nombre='Invitado'){
        return 'usuario '. $nombre;

    }
    public function usuariodosparametros($nombre='Invitado',$comentarioid){
        return 'usuario '. $nombre . 'y el comentario es '. $comentarioid;
    }
}
