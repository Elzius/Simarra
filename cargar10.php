<?php 
    $id=$_GET['id'];
    include "config/bd10.php";
    $conexion=conexion();
    $datos=datos($conexion,$id);

    $tipo=$datos['tipo'];
    $categoria=$datos['categoria'];
    $nombre=$datos['nombre'];
    $archivo=$datos['archivo'];
    $valor_tipo="Content-type:$tipo";
    header("Content-type:$tipo");
    header("Content-Disposition:inline;filename=$nombre.$categoria");
    echo $archivo;
?>