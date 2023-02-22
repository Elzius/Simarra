<?php 
$id=$_GET['id'];
include '../config/bd17.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index17.php?eliminar=success');
}else{
    header('location:../index17.php?eliminar=error');
}
?>