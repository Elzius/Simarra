<?php 
$id=$_GET['id'];
include '../config/bd14.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index14.php?eliminar=success');
}else{
    header('location:../index14.php?eliminar=error');
}
?>