<?php

namespace Model;

class Vendedor extends ActiveRecord{

    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono', 'email'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? '';
    }
    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "El nombre del vendedor(a) es obligatorio";
        }
        if(!$this->apellido){
            self::$errores[] = "El apellido del vendedor(a) es obligatorio";
        }
        if(!$this->telefono){
            self::$errores[] = "El telefono del vendedor(a) es obligatorio";
        }else if(!preg_match('/[0-9]{9}/', $this->telefono)){
            self::$errores[] = "Formato del teléfono no valido";
        }
        $pattern = '/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/';
        if(!$this->email){
            self::$errores[] = "El email del vendedor(a) es obligatorio";
        }else if(!preg_match($pattern, $this->email)){
            self::$errores[] = "Formato del email no valido";
        }
        return self::$errores;
    }
}