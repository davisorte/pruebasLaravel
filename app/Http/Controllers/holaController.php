<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class holaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //este metodo es auto invocable
    public function __invoke(Request $request)
    {
        //
        return 'Hola David esta es una ruta';
    }
}
