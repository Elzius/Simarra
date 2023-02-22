<?php 
function conexion(){
    $con=mysqli_connect('localhost','root','','bdsimarra');
    return $con;
}

function listar($conexion){
    $sql="SELECT * FROM pc";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function insertar($conexion,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){
    $sql="INSERT INTO pc(nombre,categoria,fecha,tipo,archivo) VALUES('$nombre','$categoria','$fecha','$tipo','$archivoBLOB')";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function eliminar($conexion,$id){
    $sql="DELETE from pc WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function datos($conexion,$id){
    $sql="SELECT * FROM pc WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);
    return $datos;
}
function editarNombre($conexion,$id,$nombre){
    $sql="UPDATE pc SET nombre='$nombre' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editarArchivo($conexion,$id,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE pc SET categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
function editar($conexion,$id,$nombre,$categoria,$tipo,$fecha,$archivoBLOB){
    $sql="UPDATE pc SET nombre='$nombre', categoria='$categoria',tipo='$tipo',fecha='$fecha',archivo='$archivoBLOB' WHERE id=$id";
    $query=mysqli_query($conexion,$sql);
    return $query;
}
?>