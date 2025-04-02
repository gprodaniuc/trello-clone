<?php 
session_start();

if(!isset($_POST['titulo'])){
    echo 'Debes definir el titulo antes de continuar.';
    exit;
}

$titulo = trim($_POST['titulo']);

if(empty($titulo)){
    echo "Titulo vacio, porfavor inserte un titulo.";
    exit;
}

if (!isset($_SESSION['boards'])){
    $_SESSION['boards'] = [];
}

$_SESSION['boards'] [] = ["id" => count($_SESSION['boards']) + 1, "name" => $titulo];

header('Location: ../index.php');
exit;
?>