<?php
//indica este controlador que esta en la carpeta usuarios
namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function user($nombre='Invitado'){
        return 'usuario '. $nombre;
    }
    public function user1($id){
        return 'nombre '. $id;
    }
    public function user2($id,$nombre){
        return 'nombre '. $id . ' y el nombre es '. $nombre;
    }

}
