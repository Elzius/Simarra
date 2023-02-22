<?php 
$id=$_GET['id'];
include '../config/bd11.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index11.php?eliminar=success');
}else{
    header('location:../index11.php?eliminar=error');
}
?>