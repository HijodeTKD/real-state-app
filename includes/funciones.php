<?php

define("TEMPLATES_RUTA", __DIR__ . "/templates");
define("FUNCIONES_RUTA", __DIR__ . "funciones.php");
define("CARPETA_IMAGENES", $_SERVER["DOCUMENT_ROOT"] . "/imagenes/");

function incluirTemplate(string $nombre, bool $inicio = false){
  include TEMPLATES_RUTA . "/{$nombre}.php";
}

function estaAutenticado(){
  session_start();

  if (!$_SESSION["login"]) {
    header("Location: /");
  }
}

function debuguear($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}

function s($html){
  $s = htmlspecialchars($html);
  return $s;
}

function validarTipoContenido($tipo){
  $tipos = ["vendedor", "propiedad", "entrada"];
  return in_array($tipo, $tipos);
}

function mostrarMensaje($codigo){
  $mensaje = "";
  switch ($codigo) {
    case 1:
      $mensaje = "Creado correctamente";
      break;
    case 2:
      $mensaje = "Actualizado correctamente";
      break;
    case 3:
      $mensaje = "Eliminado correctamente";
      break;
    default:
      $mensaje = false;
      break;
  }
  return $mensaje;
}

function validarURLoRedireccionar($url){
  $id = $_GET["id"];
  $id = filter_var($id, FILTER_VALIDATE_INT);
  
  if (!$id) {
    header("Location: ${url}");
  }

  return $id;
}
