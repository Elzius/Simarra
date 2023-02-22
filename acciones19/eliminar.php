<?php 
$id=$_GET['id'];
include '../config/bd19.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index19.php?eliminar=success');
}else{
    header('location:../index19.php?eliminar=error');
}
?>