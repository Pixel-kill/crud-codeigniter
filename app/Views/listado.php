<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>CRUD CodeIgniter</title>
  </head>
  <body>
  <div class="container">

     <div class="row mt-5">
        
        <div class="col-sm-5 border">
            <h1 class="">Crud con CodeIgniter</h1>
             <form action="<?php echo base_url().'/crear' ?>" method="POST">
                <label for="nombre" class="fw-bold">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control mb-3">
                <label for="paterno" class="fw-bold" >Apellido Paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control mb-3">
                <label for="materno" class="fw-bold">Apellido Materno</label>
                <input type="text" name="materno" id="materno" class="form-control">
                <br>
                <button class="btn btn-primary mb-1">Guardar</button>
            </form>
        </div>

        <div class="col-sm-7 ">
        <h1>Listado de personas</h1>
            <div class="table table-responsive">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php foreach ($datos as $key): ?>
                    <tr>
                        <td><?php echo $key->nombre ?></td>
                        <td><?php echo $key->paterno ?></td>
                        <td><?php echo $key->materno ?></td>
                        <td> <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning btn-sm">Editar</a></td>
                        <td><a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        let mensaje = '<?php echo $mensaje ?>';
        if (mensaje == '1') {
            swal(":D", "You clicked the button!", "success");
        }else if(mensaje== '0'){
            swal(":C", "You clicked the button!", "error");
        }

        if (mensaje == '2') {
            swal(":D", "Se Actualizo!", "success");
        }else if(mensaje== '3'){
            swal(":C", "No se ACtualizp!", "error");
        }

        if (mensaje == '4') {
            swal(":D", "Se Elimino con exito!", "success");
        }else if(mensaje== '5'){
            swal(":C", "No se Elimino!", "error");
        }
    </script>
  </body>
</html>