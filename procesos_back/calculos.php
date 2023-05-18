<?php
    function calculadora_app(){
        $n1 = $n2 = $tipo = $result = 0;
        if(isset($_POST['operar'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $tipo = $_POST['tipo'];
    
            switch ($tipo){
                case "1" :
                    $result = $n1 + $n2 ;
                    break;
                case "2" :
                    $result = $n1 - $n2 ;
                    break;
                case "3" :
                    $result = $n1 * $n2 ;
                    break;
                case "4" :
                    $result = $n1 / $n2 ;
                    break;
            }
            echo '<h1>'.$result.'</h1>';
        }
    }

    function verificar_edad(){
        $edad = 0;  
        if(isset($_POST['verificar'])){
            $edad = $_POST['edad'];
            
            if($edad <= 0 or $edad >= 110){
                echo '<h1>La edad es invalida, intentelo de nuevo</h1>';
            }
            elseif ($edad >= 18) {
                echo '<h1>Eres mayor de edad : '.$edad .'</h1>';
            } else {
                echo '<h1>Eres menor de edad :'.$edad.'</h1>';
            }
        }
    }

    function mostrar_datos(){
        $nombre = '';
        $apellido = '';
        $cedula= '';
        
        if(isset($_GET['enviar'])){
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $cedula = $_GET['cedula'];
            
            echo $nombre.' '.$apellido.' '.$cedula;
        }
    }

    function edad_exacta(){

        if(isset($_POST['verificar'])){
            $fecha_nac = new DateTime($_POST['fecha_nac']);
            
            $fecha_act = new DateTime(date('y-m-d'));

            $diferencia = $fecha_nac->diff($fecha_act);

            $anos = $diferencia->y;
            $meses = $diferencia->m;
            $dias = $diferencia->d;

            echo $anos." años - ".$meses." meses - ".$dias." dias";
        }
    }

    function mostrar_bd(){
        include 'procesos_back/conexion.php';
        $query = mysqli_query($conexion, 'SELECT * FROM tabla_backend');

        while($datos = mysqli_fetch_array($query)){

            $id = $datos['id'];             // ---> $datos['id'] === $datos[0] 
            $nombre = $datos['nombre'];     // ---> $datos['nombre'] === $datos[1]
            $apellido = $datos['apellido'];
            $cedula = $datos['cedula'];
            $edad = $datos['edad'];

            echo '
            <tr data-url="FQS7i2z1CoA">
                <td>#</td>
                <td>'.$id.'</td>
                <td>'.$nombre.'</td>
                <td>'.$apellido.'</td>
                <td>'.$cedula.'</td>
                <td>'.$edad.'</td>
            </tr>
            ';
        }
    }


    function traer_lista_cc(){
        include 'procesos_back/conexion.php';
        $query_2 = mysqli_query($conexion, 'SELECT * FROM tabla_backend');

        while($datos_2 = mysqli_fetch_array($query_2)){
            $cedula_query = $datos_2['cedula'];
            echo '
                <option value="'.$cedula_query.'">'.$cedula_query.'</option>
            ';
        }
    }


    function traer_formulario_act_datos(){

        if(isset($_POST['buscar'])){
        
            $id_query_cc= $_POST['id_consulta'];
            echo '
                <h4>Ingrese los datos nuevos para la cedula : '.$id_query_cc.'</h4>

                <form action="procesos_back/actualizar.php" method="POST">

                    <input type="text" name="nombre_act" placeholder="Digite nuevo nombre"></input>
                    <input type="text" name="apellido_act" placeholder="Digite nuevo apellido"></input>
                    <input type="hidden" value="'.$id_query_cc.'" name="cc_act">                        <!--Esto es para enviar el valor de la "cedula" para consultar en Mysql-->
                    <input type="submit" name="actualizar" value="actualizar"></input>
                
                    </form>
                ';
        }
    }










?>
