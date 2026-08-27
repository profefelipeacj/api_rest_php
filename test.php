<?php

header('Content-Type: application/json');

$raw = file_get_contents('php://input');

echo json_encode([
    'metodo' => $_SERVER['REQUEST_METHOD'],
    'content_type' => $_SERVER['CONTENT_TYPE'] ?? null,
    'content_length' => $_SERVER['CONTENT_LENGTH'] ?? null,
    'raw' => $raw
]);
