<?php 
$id=$_GET['id'];
include '../config/bd12.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index12.php?eliminar=success');
}else{
    header('location:../index12.php?eliminar=error');
}
?>