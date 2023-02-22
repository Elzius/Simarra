<?php 
$id=$_GET['id'];
include '../config/bd6.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index6.php?eliminar=success');
}else{
    header('location:../index6.php?eliminar=error');
}
?>