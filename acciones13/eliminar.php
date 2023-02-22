<?php 
$id=$_GET['id'];
include '../config/bd13.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index13.php?eliminar=success');
}else{
    header('location:../index13.php?eliminar=error');
}
?>