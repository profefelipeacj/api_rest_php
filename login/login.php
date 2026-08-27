<?php

session_start(); // Llamar a Sesiones.

$user = $_POST['usuario'];
$password = $_POST['password'];

if($user == "user123" && $password == "123"){
    // Inicia sesión, Autorizado, permiso concedido.
    $_SESSION['usuario'] = $user;
    $_SESSION['id'] = rand(1,5000); // ID aleatorio.
    header("Location: sistema.php");
}else{
    header("Location: index.php?error=0");
}