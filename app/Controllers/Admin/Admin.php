<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\Usuario;

class Admin extends BaseController{
    protected $configs;

    public function __construct(){
        $this->configs=config('CT');
    }
    public function index(){
        return view ('admin/incidencias');
    }
    public function register(){
        return view ('admin/registrarUsuario');
    }
    public function report(){
        return view ('admin/reportes');
    }
    public function buscarUsuario(){
        return view ('admin/buscarUsuario');
    }
    public function agregarDispositivo(){
        return view ('admin/agregarDispositivo');
    }
    public function configuracion(){
        return view ('admin/configuracion');
    }
    public function registerCt(){
        return view ('admin/registrarCt');
    }
    public function registrarUsuario(){

        $validar = service('validation');
        
        $validar->setRules([
            'nombre'=>'required|alpha_space',
            'apellido'=>'required|alpha_space',
            'email'=>'required|valid_email|is_unique[tbl_usuarios.email]',
            'telefono'=>'required|numeric|is_unique[tbl_usuarios.telefono]',
            'dui'=>'required|numeric|is_unique[tbl_usuarios.dui]',
            'password'=>'required|matches[c-password]'
        ],
        [
            'nombre' => [
                    'required' => 'Digite un nombre',
                    'alpha_space' => 'Caracteres no permitidos'
            ],
            'apellido' => [
                'required' => 'Digite un apellido',
                'alpha_space' => 'Caracteres no permitidos'
            ],
            'email' => [
                'required' => 'Digite un correo',
                'valid_email' => 'Correo no valido',
                'is_unique' => 'Este correo ya existe'
            ],
            'telefono' => [
                'required' => 'Digite un número de telefono',
                'numeric' => 'Solo digite numeros',
                'is_unique' => 'Este número de telefono ya existe'
            ],
            'dui' => [
                'required' => 'Digite un número de Dui',
                'numeric' => 'Solo digite numeros',
                'is_unique' => 'Este número de dui ya existe'
            ],
            'password' => [
                'required' => 'Digite su contraseña',
                'matches' => 'Las contraseñas no coinciden'
            ],
        ]
        );

        if(!$validar->withRequest($this->request)->run()){
            return redirect()->back()->withInput()->with('errors',$validar->getErrors());
        }

        $usuario = new Usuario($this->request->getPost());

        $usuario->generarUsername();

        $model=model('UsuarioModel');

        $model->agregarUnRol($this->configs->defaultRolUsuario);

        $model->save($usuario);

        return redirect()->route('register')->with('msg',[
            'type'=>'success',
            'body'=>'Usuario registrado correctamente'
        ]);
    }
    public function registrarCentroTecnologia(){
        $validar = service('validation');
        
        $validar->setRules([
            'nombreCt'=>'required',
            'encargado'=>'required',
            'descripcion'=>'required',
        ],
        [
            'nombreCt' => [
                    'required' => 'Digite un nombre'
            ],
            'encargado' => [
                'required' => 'Digite un encargado'
            ],
            'descripcion' => [
                'required' => 'Digite una descripcion'
            ]
        ]
        ); 

        if(!$validar->withRequest($this->request)->run()){
            return redirect()->back()->withInput()->with('errors',$validar->getErrors());
        }
    }

    public function cerrar(){
        session()->destroy();
        return redirect()->route('index');
    }
}