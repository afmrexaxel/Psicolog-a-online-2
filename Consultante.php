<?php

include_once("../config/config.php");
include("../config/Database.php");

class Consultante{

public $conexion;

function __construct()

{
    $db = new Database();
    $this->conexion = $db->connectToDatabase();
}

function save($params){
$Nombres = $params['Nombres'];
$Documento = $params['Documento'];
$Edad =$params['Edad'];
$Sexo = $params['Sexo'];
$Estadocivil = $params['Estadocivil'];
$Celular = $params['Celular'];
$Correo = $params['Correo'];
$Niveldeformacion = $params['Niveldeformacion'];
$Estrato = $params['Estrato'];


$insert = "INSERT INTO Consultantes VALUES (NULL, '$Nombres', '$Documento', '$Edad', '$Sexo', '$Estadocivil', '$Celular', '$Correo', '$Niveldeformacion', '$Estrato')";


return mysqli_query($this->conexion, $insert);
}

function getALL(){
    $sql = "SELECT * FROM Consultantes";
    return mysqli_query($this->conexion, $sql);
} 

function getOne($id){
$sql = "SELECT * FROM Consultantes WHERE id = $id";
return mysqli_query($this->conexion, $sql);
}
function update($params){
$Nombre = $params['Nombre'];
$Documento = $params['Documento'];
$Edad = $params['Edad'];
$Sexo = $params['Sexo'];
$Estadocivil = $params['Estadocivil'];
$Celular = $params['Celular'];
$Correo = $params['Correo'];
$Niveldeformacion = $params['Niveldeformacion'];
$Estrato = $params['Estrato'];

$id = $params['id'];

$update = "UPDATE Consultantes SET Nombre='$Nombre', Documento='$Documento', Edad='$Edad', Sexo='$Sexo', Estadocivil='$Estadocivil', Celular=$Celular, Correo='$Correo', Niveldeformacion='$Niveldeformacion', Estrato=$Estrato  WHERE id = $id";
return mysqli_query($this->conexion, $update);
}

function delete($id){
    $delete = " DELETE FROM Consultantes WHERE id = $id";
    return mysqli_query($this->conexion, $delete);
}

}

?>