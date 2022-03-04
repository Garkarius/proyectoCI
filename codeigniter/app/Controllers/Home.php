<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function registro(){
        return view ('vRegistro.php');
    }

    public function ingreso(){
        return view ('vIngreso');
    }

    public function insertarForm(){
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "usuario" => $_POST['email'],
            "password" => $_POST['password']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['idRegistrado']=$mUsuarios->db->insertID();

        return view("vSuccess", $datoId);
    }

    public function buscarRegistro(){
        $mUsuarios = new mUsuarios();
        
    }

}
?>