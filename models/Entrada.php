<?php

namespace Model;

class Entrada extends ActiveRecord{

    protected static $tabla = 'entradas';
    protected static $columnasDB = ['id', 'titulo','contenido', 'imagen','creado', 'usuarioID'];

    public $id;
    public $titulo;
    public $contenido;
    public $imagen;
    public $creado;
    public $usuarioID;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->contenido = $args['contenido'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->creado = date(('Y/m/d'));
        $this->usuarioID = $args['usuarioID'] ?? '';
    }

    public function validar(){
        if(!$this->titulo){
            self::$errores[] = "El titulo es obligatorio";
        }
        if(!$this->contenido){
            self::$errores[] = "El contenido de la entrada es obligatorio";
        }
        if(strlen($this->contenido) < 100){
            self::$errores[] = "El contenido de la entrada debe tener al menos 100 carácteres";
        }
        if(!$this->imagen){
            self::$errores[] = "La imagen de la propiedad es obligatoria";
        }
        return self::$errores;
    }
}