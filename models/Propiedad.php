<?php

namespace Model;

class Propiedad extends ActiveRecord{

    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo','precio', 'imagen', 'descripcion', 'habitaciones', 'baños', 'aparcamientos', 'creado', 'vendedorID'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $baños;
    public $aparcamientos;
    public $creado;
    public $vendedorID;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->baños = $args['baños'] ?? '';
        $this->aparcamientos = $args['aparcamientos'] ?? '';
        $this->creado = date(('Y/m/d'));
        $this->vendedorID = $args['vendedorID'] ?? '';
    }

    public function validar(){
        if(!$this->titulo){
            self::$errores[] = "El titulo es obligatorio";
        }
        if(!$this->precio){
            self::$errores[] = "El precio es obligatorio";
        }
        if(!$this->precio > 99999999999){
            self::$errores[] = "Asigna un precio corrrecto";
        }
        if(strlen(!$this->descripcion) > 50 ){
            self::$errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres.";
        }
        if(!$this->habitaciones){
            self::$errores[] = "El numero de habitaciones es obligatorio";
        }
        if(!$this->baños){
            self::$errores[] = "El numero de baños es obligatorio";
        }
        if(!$this->aparcamientos){
            self::$errores[] = "El numero de aparcamientos es obligatorio";
        }
        if(!$this->vendedorID){
            self::$errores[] = "Selecciona un vendedor";
        }
        if(!$this->imagen){
            self::$errores[] = "La imagen de la propiedad es obligatoria";
        }
        return self::$errores;
    }
}   
