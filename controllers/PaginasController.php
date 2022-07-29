<?php

namespace Controllers;

use Model\Entrada;
use Model\Propiedad;
use Model\Usuario;
use MVC\Router;
use PHPMailer\PHPMailer\PHPmailer;

class PaginasController {

    public static function index(Router $router){
        $inicio = true;
        $propiedades = Propiedad::get(3);
        $entradas = Entrada::get(2);
        $usuarios = Usuario::all();
        $router->render('paginas/index',[
            'propiedades' => $propiedades , 
            'entradas' => $entradas , 
            'inicio' => $inicio ,
            'usuarios' => $usuarios
        ]);
    }
    public static function nosotros(Router $router){
        $router->render('paginas/nosotros',[]);
    }

    public static function anuncios(Router $router){
        $propiedades = Propiedad::all();
        $router->render('paginas/anuncios',[
            'propiedades' => $propiedades
        ]);
    }

    public static function anuncio(Router $router){
        $id = validarURLoRedireccionar('/propiedades');
        $propiedad = Propiedad::find($id);
        $router->render('paginas/anuncio',[
            'propiedad' => $propiedad
        ]);
    }

    public static function blog(Router $router){
        $entradas = Entrada::all();
        $usuarios = Usuario::all();

        $router->render('paginas/blog', [
            'entradas' => $entradas ,
            'usuarios' => $usuarios
        ]);
    }

    public static function entradablog(Router $router){
        $id = validarURLoRedireccionar('/blog');
        $entrada = Entrada::find($id);
        $usuarioID = $entrada->usuarioID;
        $usuario = Usuario::find($usuarioID); 

        $router->render('paginas/entradablog', [
            'entrada' => $entrada ,
            'usuario' => $usuario
        ]);
    }
    public static function contacto(Router $router){
        $exito = null;
        $mensaje = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $respuestas = $_POST['contacto'];
            $mail = new PHPmailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 465;
            $mail->Username = 'e934135d535b42';
            $mail->Password = '5a695b100cd9d9';
            $mail->SMTPSecure = 'tls';
            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('germanpsart@gmail.com', 'bienesraices.com');
            $mail->Subject = 'Tienes un nuevo mensaje';
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $contenido = '<html>';
            $contenido .= '<p>Tienes un nuevo mensaje de:' . ' ' . $respuestas['nombre'] . '</p>';
            $contenido .= '<p>Mensaje:' . ' ' . $respuestas['mensaje'] . '</p>';
            $contenido .= '<p>El cliente quiere hacer una' . ' ' . $respuestas['tipo'] . ' ' . 'con un precio/presupuesto de' . ' ' . $respuestas['precio'] . '€' . '</p>';

            if($respuestas['contacto'] === 'telefono'){
                $contenido .= '<p>' . $respuestas['nombre'] . ' ' . 'quiere se contactado/a al telefono' . ' ' . $respuestas['telefono'] . ' ' . 'el día' . ' ' . $respuestas['fecha'] . ' ' . 'a las' . ' ' . $respuestas['hora'] . '</p>';
            }else{
                $contenido .= '<p>' . $respuestas['nombre'] . ' ' . 'quiere se contactado/a por' . ' ' . 'email:' . ' ' . $respuestas['email'] . '</p>';
            }

            $contenido .= '</html>';
            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texti alternativo sin html';

            if($mail->send()){
                $exito = true;
                $mensaje = "Mensaje enviado correctamente";
            }else{
                $exito = false;
                $mensaje = "El mensaje no se ha podido enviar...";
            }
        }
        $router->render('paginas/contacto', [
            'exito' => $exito ,
            'mensaje' => $mensaje
        ]);
    }
}