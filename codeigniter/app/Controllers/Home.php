<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function binvenida(){
        return view('vBienvenida.php');
    }

    public function registro(){
        return view('vRegistro');
    }

}