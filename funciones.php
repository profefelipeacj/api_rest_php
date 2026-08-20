<?php

function obtenerUsuarios(){
    $matrix = [
        ['id' => 1, 'nombre' => 'Roberto'],
        ['id' => 2, 'nombre' => 'Rafaela']
    ];
    return $matrix;
}

function autenticacion(){ // login
    // Se reciben datos que vienen en formato JSON.
    $input_json = json_decode(file_get_contents('php://input'));
    $datos = [
        "datos_input" => $input_json 
    ];
    return $datos;
}

function login(){
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];
    // Validación de acceso....
    return [
        "usuario" => $usuario,
        "password" => $password
    ];
}

function accionNoEncontrada(){
    // 404 NO ENCONTRADO.
    // 500 ERROR INTERNO DE SERVIDOR.
    http_response_code(404);
    return ["error" => "SERVICIO NO 
    ENCONTRADO"];
}

?>