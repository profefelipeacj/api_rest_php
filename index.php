<?php
// Esto es una API REST.
header('Content-Type: application/json;charset=utf-8');

// Se importa librería funciones.php para usar funciones.
require_once "funciones.php";

// Se recibe la acción a través del método GET.
$accion = isset($_GET['accion']) ? $_GET['accion'] : '';

// Se procesarán las solicitudes con un switch.
switch($accion){
    case 'usuarios':
        $respuesta = obtenerUsuarios();
        break;
    case 'auth':
        $respuesta = autenticacion();
        break;
    case 'login':
        $respuesta = login();
        break;
    default: // No se encuentre una función...
        $respuesta = accionNoEncontrada();
        break;
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>