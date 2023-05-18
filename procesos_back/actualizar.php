<?php
include 'conexion.php';

if (isset($_POST['actualizar'])){

    $nombre_act = $_POST['nombre_act'];
    $apellido_act = $_POST['apellido_act'];
    $cc_act = $_POST['cc_act'];

    mysqli_query($conexion, "UPDATE tabla_backend 
                            SET  nombre = '$nombre_act', apellido = '$apellido_act'
                            WHERE cedula ='$cc_act' ");

}
header('location: ../actualizar_bd.php');

?>

