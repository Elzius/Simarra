<?php 
$id=$_GET['id'];
include '../config/bd22.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index21.php?eliminar=success');
}else{
    header('location:../index21.php?eliminar=error');
}
?>