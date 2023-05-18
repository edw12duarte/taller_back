<?php
include 'conexion.php';

if (isset($_POST['almacenar'])){

    $nombre = strtoupper($_POST['nombre']);  //--> strtoupper : para poner en mayuscula todas las letras
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $edad = $_POST['edad'];

    //Se usar UPPER solo para poner en mayuscula los datos seleccionados.
    mysqli_query($conexion,"INSERT INTO tabla_backend (nombre, apellido, cedula, edad) 
                            VALUES ('$nombre', UPPER('$apellido'), '$cedula', '$edad')");

}
header('location: ../llamado_bd.php');


?>