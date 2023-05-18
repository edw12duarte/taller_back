
<?php

    $host = 'localhost';
    $user ='root';
    $password='';
    $bd='cliente_servidor';

    $conexion = new mysqli($host, $user, $password, $bd);

    if ($conexion -> errno){
        echo 'Fallo de conexión';
        exit();
    }

?>
