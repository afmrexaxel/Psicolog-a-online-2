<?php 
include("../config/config.php");
include("Consultante.php");

$c = new Consultante();
$dc = mysqli_fetch_object($c->getOne($_GET["id"]));


if (isset($_POST) && !empty($_POST)){
  
    $update = $c->update($_POST);
    if ($update){
      $error = '<div class="alert alert-success" role="alert">Usuario modificado correctamente</div>';
    }else{
      $error = '<div class="alert alert-danger" role="alert" > Error al modificar un Usuario </div>';
    }
  }
  
?>

<!DOCTYPE html>
<html>
    <head>

<meta charset="UTF-8">
<title>Modificar sesión</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php')?>
        <div class="container">
        <?php
    if (isset($error)){
      echo $error;
    }
    ?>
            <h2 class="text-center mb-2">Modificar sesión</h2>
            <form method="POST" enctype="multipart/form-data">

                <div class="rew mb-2">
                <div class="col">
                <input type="text" name="Nombre" id="Nombre" placeholder="Nombres del consultante" class="form-control" value="<?= $dc->Nombre?>"/>
                <input type="hidden" name="id"value="<?= $dc->id?>" />
                </div> 

                <div class="col">
                <input type="text" name="Documento" id="Documento" placeholder="Documento del consutante" class="form-control" value="<?= $dc->Documento?>"/>
                </div>

                <div class="col">
                <input type="text" name="Edad" id="Edad" placeholder="Edad del consutante" class="form-control" value="<?= $dc->Edad?>"/>
              </div>

              <div class="col">
              <input type="text" name="Sexo" id="Sexo" placeholder="Sexo del consutante" class="form-control"value="<?= $dc->Sexo?>" />
              </div>

              <div class="col">
              <input type="text" name="Estadocivil" id="Estadocivil" placeholder="Estadocivildelconsultante" class="form-control" value="<?= $dc->Estadocivil?>"/>
              </div>

              <div class="col">
              <input type="number" name="Celular" id="Celular" placeholder="Celular del consultante" class="form-control"value="<?= $dc->Celular?>"/>
              </div>

              <div class="col">
              <input type="Correo" name="Correo" id="Correo" placeholder="Correo del consultante" class="form-control"value="<?= $dc->Correo?>" />
              </div>
              
              <div class="col">
              <input type="text" name="Niveldeformacion" id="Niveldeformacion" placeholder="Nivel de formacion del consultante" class="form-control"value="<?= $dc->Niveldeformacion?>" />
               </div>

              <div class="col">
              <input type="number" name="Estrato" id="Estrato" placeholder="Estrato del consultante" class="form-control"value="<?= $dc->Estrato?>" />
              </div>
            </div>

            <div class="row mb-2">
                
              
             
              <button  class="btn btn-primary">Modificar</button>
             </div>

           

            </form>

        </div>
    </body>
</html>