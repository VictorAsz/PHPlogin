<?php

//inicio da sessão
session_start();

// carregamento das rotas permitidas 
$rotas_permitidas = require_once __DIR__ . '/../inc/rotas.php';

//definição da rota

$rota = $_GET["rota"] ?? "home";

//verifica se o usuario está logado

if(!isset($_SESSION['usuario'])){
    $rota =" login";
}

// se o usuario está logado e tenta entrar no login
if(isset($_SESSION["usuario"]) && $rota === "login"){
    $rota = "home";
}


?>