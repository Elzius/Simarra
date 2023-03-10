


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
<a href="pagina.php">ATRAS</a>
    <style>
    a{
        display:block;
        color:#0000FF;
        text-decoration:none;
        font-family:arial,helvetica,sans-serif;
    }
</style>
    <div class="container">
        <form class="m-auto w-50 mt-2 mb-2" method="POST" enctype="multipart/form-data" action="acciones14/insertar.php">
            
        <div class="mb-2">
                <label class="form-label">Nombre del archivo</label>
                <input class='form-control form-control-sm' type="text" name="nombreArchivo">
            </div>
            <div class="mb-2">
                <label class="form-label">Selecciona un archivo</label>
                <input class='form-control form-control-sm' type="file" name="archivo">
            </div>
            <button class="btn btn-primary btn-sm">Subir archivo</button>
        </form>
        <table class="table table-sm table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>categoria</th>
                    <th>Archivo</th>
                    <th>fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'config/bd14.php';
                    $conexion=conexion();
                    $query=listar($conexion);
                    $contador=0;
                    while($datos=mysqli_fetch_assoc($query)){
                        $contador++;
                        $id=$datos['id'];
                        $nombre=$datos['nombre'];
                        $categoria=$datos['categoria'];
                        $fecha=$datos['fecha'];
                        $archivo=$datos['archivo'];
                        $tipo=$datos['tipo'];

                    $valor="";
                    if($categoria=='jpg' || $categoria=='png'){
                        $valor="<img width='50' src='data:image/jpg;base64,".base64_encode($archivo)."'>";
                    }

                    if($categoria=='pdf'){
                        $valor="<img  width='50' src='img/pdf.png'>";
                    }

                    if($categoria=='xlsx' || $categoria=='xlsx' ){
                        $valor="<img  width='50' src='img/exel.png'>";
                    }

                    if($categoria=='docx' || $categoria=='docx'){
                        $valor="<img  width='50' src='img/word.png'>";
                    }
                    if($categoria=='ppt' || $categoria=='pptx'){
                        $valor="<img  width='50' src='img/ppt.jpg'>";
                    }
                    if($categoria=='zip' || $categoria=='rar'){
                        $valor="<img  width='50' src='img/rar.jpg'>";
                    }
                    if($categoria=='txt' || $categoria=='txt'){
                        $valor="<img  width='50' src='img/txt.png'>";
                    }
                    if($categoria=='mp4'){
                        $valor="<img  width='50' src='img/mp4.png'>";
                    }

                    if($categoria=='mp3'){
                        $valor="<img  width='50' src='img/mp3.png'>";
                    }
                    

                    if($valor==''){
                        $valor="<img  width='50' src='img/desconocido.png'>";
                    }
                    
                ?>
                <tr>
                    <td><?php echo $contador;?></td>
                    <td><?php echo $nombre ;?></td>
                    <td><?php echo $categoria;?></td>
                    <td><a href="cargar14.php?id=<?php echo $id; ?>"><?php echo $valor ;?> descargar</a></td>
                    <td><?php echo $fecha ;?></td>
                    <td><a class='btn btn-secondary' href="editar14.php?id=<?php echo $id?>">Editar</a> <a class='btn btn-danger' href="acciones14/eliminar.php?id=<?php echo $id?>">Eliminar</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>


    </div>
    

<script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>