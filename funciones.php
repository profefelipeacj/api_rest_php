<?php

function obtenerUsuarios(){
    $matrix = [
        ['id' => 1, 'nombre' => 'Roberto'],
        ['id' => 2, 'nombre' => 'Rafaela']
    ];
    return $matrix;
}

function accionNoEncontrada(){
    // 404 NO ENCONTRADO.
    // 500 ERROR INTERNO DE SERVIDOR.
    http_response_code(404);
    return ["error" => "SERVICIO NO 
    ENCONTRADO"];
}

?>