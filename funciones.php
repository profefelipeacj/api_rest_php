<?php
function validaSesion(){
    session_start();
    if(isset($_SESSION['id'])){
        return true;
    }
    return false;
}

function obtenerUsuarios(){
    if(!validaSesion()){
        return [
            "error" => "NO PERMITIDO"
        ];
    }
    $matrix = [
        ['id' => 1, 'nombre' => 'Roberto'],
        ['id' => 2, 'nombre' => 'Rafaela']
    ];
    return $matrix;
}

function autenticacion(){ // login
    // Se reciben datos que vienen en formato JSON.
    $input_json = json_decode(file_get_contents('php://input'));
    if($input_json->usuario == "upla" && $input_json->password == "upla123"){
        session_start(); // Se inicia sesión en servidor
        $_SESSION['usuario'] = $input_json->usuario; // Se guarda sesion usuario.
        $_SESSION['id'] = rand(1, 5000); // Se guarda un id usuario.
        $datos = [
            "datos_input" => $input_json,
            "usuario" => $_SESSION['usuario'],
            "id" => $_SESSION['id']
        ];
    }else{
        http_response_code(401);
        return ["error" => "NO AUTORIZADO"];
    }
    
    return $datos;
}

function cierre_sesion(){
    session_start();
    session_destroy();
    return [
        "respuesta" => "SESIÓN DESTRUIDA"
    ];
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