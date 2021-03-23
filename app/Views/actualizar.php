<?php 

$idnombre = $datos[0]['id_nombre'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno'];
$materno = $datos[0]['materno'];


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Actualiza un nombre</title>
  </head>
  <body>
    
  <div class="container">

    <div class="row mt-5">

        <div class="col-sm-5 border">
        <h1 class="">Crud con CodeIgniter</h1>
            <form action="<?php echo base_url().'/actualizar' ?>" method="POST">
            <input type="text" id="idNombre" name="idNombre" hidden="" value="<?php echo $idnombre ?>">
                <label for="nombre" class="fw-bold">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control mb-3" value="<?php echo $nombre?>">
                <label for="paterno" class="fw-bold" >Apellido Paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control mb-3" value="<?php echo $paterno ?>">
                <label for="materno" class="fw-bold">Apellido Materno</label>
                <input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno ?>">
                <br>
                <button class="btn btn-primary mb-1">Guardar</button>
            </form>
        </div>
    </div>

    

</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    -->
  </body>
</html>