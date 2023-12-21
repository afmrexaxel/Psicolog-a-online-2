<?php 
include_once("../config/config.php");
include("Consultante.php");
$p = new Consultante();
$data = $p->getALL();

if(isset($_GET['id']) && !empty($_GET['id'])){
   $remove= $p->delete($_GET['id']);
   if($remove){
    header('Location: index.php');
 }else{
    $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar></div>';
 }
}
?>

<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8" />
       <title>Lista de sesiones</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php')?>
    <div class="container">
        <h2 class="text-center mb-2">Calendario</h2>
        <div class="row" >
        <?php 
    
        while ($usuarios= mysqli_fetch_object($data)){
            echo "<div class='col-6'>";
            echo "<div class='border border-info p-2'>";
            echo "<h5>Nombre: $usuarios->Nombre  </h5>";
            echo "<p><b>Correo:</b> $usuarios->Correo 
            <br>
            <b> Celular: </b>  $usuarios->Celular
            </p>";
            

            echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/Consultante/edit.php?id=$usuarios->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/Consultante/index.php?id=$usuarios->id' >Eliminar</a> </div>";

            echo "</div>";
            echo "</div>";
        }
        ?>
        </div>

    </div>


    </body>
</html>