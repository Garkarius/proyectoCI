<?php

namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function registro(){
        return view ('vRegistro');
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

        $mUsuarios -> insert($usuarioNuevo);
        
        $datoId['idRegistrado'] = $mUsuarios -> db -> insertID();

        return view("vSuccess", $datoId);
    }

    public function mostrarRegistros(){
        $mUsuarios = new mUsuarios();
        $todos = $mUsuarios->findAll();
        $usuarios = array('usuarios'=>$todos);

        return view("vRegistros",$usuarios);
    }

    public function ingresarForm(){
        $mUsuarios = new mUsuarios();
        $usuario = $_POST['email'];
        $password = $_POST['password'];
        $user = $mUsuarios->where('usuario', $usuario)->where('password', $password)->first();
        
        return view("vIngresado",$user);
    }

    public function buscarRegistro(){
        $mUsuarios = new mUsuarios();
        $i_usuario = $_POST['id_usuario'];
        $usuario = $mUsuarios -> find($id_usuario);
        return view("vRegistroEncontrado", $usuario);   
    }

    public function actualizarRegistro(){
        $mUsuarios = new musuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuarioActualizado = ["usuario" => $_POST['email'], "password" =>$_POST['password']];
        $mUsuarios -> update($id_usuario, $usuarioActualizado);

        return $this -> mostrarRegistros();
    }

}
?>