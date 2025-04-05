<?php
session_start();

#Comprobamos si el titulo esta definido
if (!isset($_POST['titulo'])) {
    echo 'Debes definir el titulo antes de continuar.';
    exit;
}

#Eliminamos espacios en blanco que pueda tener el titulo
$titulo = trim($_POST['titulo']);

#Comprobamos que el titulo no este vacio
if (empty($titulo)) {
    echo "Titulo vacio, porfavor inserte un titulo.";
    exit;
}

#Si la variable boards no  esta inicializada la inicializamos
if (!isset($_SESSION['boards'])) {
    $_SESSION['boards'] = [];
}

#Cada vez que se inserte una nueva tarjeta autoincrementamos el id
$_SESSION['boards'][] = ["id" => count($_SESSION['boards']) + 1, "name" => $titulo, "descripcion" => $_POST['descripcion']];

#Redirigimos a index.php de nuevo
header('Location: ../index.php');
exit;
