
<?php
include('../config/config.php');
include("Consultante.php");

if (isset($_POST) && !empty($_POST)){
  /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */

  $data= new Consultante(); /* LLAMO A MI LIBRO DE RECETAS */
/* 
  if ($_FILES['imagen']['name'] !== ''){
    $_POST['imagen'] = saveImage($_FILES);
  } */

  $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }
}
?>

<!DOCTYPE html>
<html>
    <head>

<meta charset="UTF-8">
<title>Registrar sesión</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="../estilos/style.css">

    </head>
    <body>
    <nav>
    <a href="./indext.html"> <img src="../Imagenes/psicología1.png" class="img-logo" alt=""></a>
    <ul>
          <li> <a href="../indext.html"> Inicio </a></li>
          <li> <a href="../tituloa.html"> Autoesquemas </a></li>
          <li> <a href="../titulob.html"> Autoconcepto </a></li>
          <li> <a href="../tituloc.html"> Autoeficia </a></li>
          <li> <a href="../titulod.html"> Autoestima </a></li>
          <li> <a href="#Autoimagen"> Autoimagen </a></li>
    </ul>
</nav>
        <div class="container">
            <?php 
            if(isset($mensaje)){
                echo $mensaje;
            }
            ?>
            <h2 class="text-center mb-2">Registrar sesión</h2>
            <form method="POST" enctype="multipart/form-data">

                <div class="rew mb-2">
                <div class="col">
                <input type="text" name="Nombres" id="Nombres" placeholder="Nombres del consultante" class="form-control"/> 
                </div> 

                <div class="col">
                <input type="text" name="Documento" id="Documento" placeholder="Documento del consutante" class="form-control"/>
                </div>

                <div class="col">
                <input type="text" name="Edad" id="Edad" placeholder="Edad del consutante" class="form-control"/>
              </div>

              <div class="col">
              <input type="text" name="Sexo" id="Sexo" placeholder="Sexo del consutante" class="form-control"/>
              </div>

              <div class="col">
              <input type="text" name="Estadocivil" id="Estadocivil" placeholder="Estado civil del consultante" class="form-control"/>
              </div>

              <div class="col">
              <input type="number" name="Celular" id="Celular" placeholder="Celular del consultante" class="form-control"/>
              </div>

              <div class="col">
              <input type="Correo" name="Correo" id="Correo" placeholder="Correo del consultante" class="form-control"/>
              </div>
              
              <div class="col">
              <input type="text" name="Niveldeformacion" id="Niveldeformacion" placeholder="Nivel de formación del consultante" class="form-control"/>
               </div>

              <div class="col">
              <input type="number" name="Estrato" id="Estrato" placeholder="Estrato del consultante" class="form-control"/>
              </div>
              
               

             </div>

             <button class="btn btn-succes"> registrar </button>

            </form>

        </div>
    </body>
</html>