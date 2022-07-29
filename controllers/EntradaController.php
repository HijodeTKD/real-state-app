<?php

namespace Controllers;

use MVC\Router;
use Model\Entrada;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Usuario;

class EntradaController{

    public static function crear(Router $router){

        $entrada = new Entrada();
        $errores = Entrada::getErrores();
        $obtenerusuarioactual = Usuario::find($_SESSION['usuario']);
        $usuario = $obtenerusuarioactual->nombre;
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {  
            $entrada = new Entrada($_POST['entrada']);
            $entrada->usuarioID = $_SESSION['usuario'];
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

            if($_FILES['entrada']['tmp_name']['imagen']){
                $image = Image::make($_FILES['entrada']['tmp_name']['imagen'])->fit(800,600);
                $entrada->setImagen($nombreImagen);
            }

            $errores = $entrada->validar();

            if(empty($errores)){
        
                if(!is_dir(CARPETA_IMAGENES)){ 
                    mkdir(CARPETA_IMAGENES);
                }
        
                $image->save(CARPETA_IMAGENES . $nombreImagen);
                $entrada->guardar();
            }
        }
        
        $router->render('entradas/crear', [
            'entrada' => $entrada ,
            'errores' => $errores ,
            'usuario' => $usuario
        ]);
        
    }

    public static function actualizar(Router $router){

        $id = validarURLoRedireccionar('/admin');
        $entrada = Entrada::find($id);
        $usuario = Usuario::find($entrada->usuarioID);
        $errores = Entrada::getErrores();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $args = $_POST['entrada'];
            $entrada->sincronizar($args);
            $errores = $entrada->validar();
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
        
            if($_FILES['entrada']['tmp_name']['imagen']){
                $image = Image::make($_FILES['entrada']['tmp_name']['imagen'])->fit(800,600);
                $entrada->setImagen($nombreImagen);
            }    
            
            if(empty($errores)){
                if($_FILES['entrada']['tmp_name']['imagen']){
                    $image->save(CARPETA_IMAGENES . $nombreImagen);
                }
                $entrada->guardar();
            }
        }

        $router->render('/entradas/actualizar',[
            'entrada' => $entrada ,
            'errores' => $errores ,
            'usuario' => $usuario
        ]);
    }
    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                $tipo = $_POST['tipo'];
                if(validarTipoContenido($tipo)){
                    $entrada = Entrada::find($id);
                    $entrada->eliminar();
                }
            }
        }
    }
}
