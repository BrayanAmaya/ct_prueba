<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController{

    protected $configs;

    public function __construct(){
        $this->configs=config('CT');
    }
    public function index(){
        return view ('auth/login');
    }

    public function signin(){
        if(!$this->validate([
            'email'=>'required|valid_email',
            'password'=>'required'
        ],[
            'email' => [
                'required' => 'Digite un correo',
                'valid_email' => 'Correo no valido'
            ],
            'password' => [
                'required' => 'Digite una contraseña'
            ],
        ])){
            return redirect()->back()->with('errors',$this->validator->getErrors())->withInput();
        }
         $email = trim($this->request->getVar('email'));
         $password = trim($this->request->getVar('password'));
 
         $model = model('UsuarioModel');
 
         if(!$usuario = $model->buscarUsuario('email', $email)){
             return redirect()
                     ->back()
                     ->with('msg',[
                         'type'=>'danger',
                         'body'=>'Este usuario no esta registrado']);
         }
         
         if(!password_verify($password,$usuario->password)){
             return redirect()
                     ->back()
                     ->with('msg',[
                         'type'=>'danger',
                         'body'=>'Credenciales invalidas']);
         }
 
        // $model->buscarRol('2');
        if($usuario->idRol != null){
        }else{
            return redirect()
                     ->back()
                     ->with('msg',[
                         'type'=>'danger',
                         'body'=>'Comuniquese con un administrador para solucionar el problema!']);
        }

        $model->buscarRol($usuario->idRol);
 
         session()->set([
             'idUsuario' => $usuario->idUsuario,
             'usuario' => $usuario->usuario,
             'idRol' => $usuario->idRol,
             'rol'=>$model->asignarVistaRol,
             'email' =>$usuario->email,
             'is_logged' => true,
 
             'nombre' => $usuario->nombre,
             'apellido' => $usuario->apellido,
         ]);

         if($model->asignarVistaRol == $this->configs->defaultRolUsuario){
             return redirect()->route('user')->with('msg',[
                 'type'=>'success',
                 'body'=>'Bienvenido '.$usuario->usuario]);
         }

         if($model->asignarVistaRol == $this->configs->defaultRolAdmin){
            return redirect()->route('incidencia')->with('msg',[
                'type'=>'success',
                'body'=>'Bienvenido '.$usuario->usuario]);
        }
    }
}