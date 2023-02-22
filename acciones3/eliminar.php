<?php 
$id=$_GET['id'];
include '../config/bd3.php';
$conexion=conexion();
$query=eliminar($conexion,$id);
if($query){
 header('location:../index3.php?eliminar=success');
}else{
    header('location:../index3.php?eliminar=error');
}
?>