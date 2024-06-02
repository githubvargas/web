<?php
$id = $_GET['id'];
if (!$id) {
    echo 'No se ha seleccionado el usuario';
    exit;
}
include_once "funciones.php";

$resultado = eliminarUsuario($id);
if(!resultado){
    echo "ELIMINADO";
    return;
}

header("Location: usuarios.php");
?>