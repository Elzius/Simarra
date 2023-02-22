<?php 
$id=$_GET['id'];
include '../config/bd15.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index15.php?eliminar=success');
}else{
    header('location:../index15.php?eliminar=error');
}
?>