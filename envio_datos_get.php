<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_calculadora.css">
    <script src="https://kit.fontawesome.com/a77799d92d.js" crossorigin="anonymous"></script>
    <title>Solucion taller backend</title>
</head>
<body>
    <?php 
        include 'procesos_back/calculos.php';
    ?>
    <nav-lateral>
    </nav-lateral>
    <section>
        <div class="superior">
            <div class="titulo">
                <h1>Solucion taller Backend - Taller 6</h1>
                <p>Según lo visto en el módulo de Backend basado en proyectos, conteste las siguientes preguntas de opción múltiple, en donde se evidencien los conocimientos de PHP, sentencias, variables, formularios, envío de datos, métodos POST y GET, entre otros.</p>
            </div>
            <div class="descripcion">
            </div>
        </div> 
        <div id="section-respuestas">
            <div id="calculadora" >
                <h1>Eviar datos GET</h1>
                <form action="" method="GET">
                    <div class="group">   
                        <label for="form_input_1">Nombre</label>
                        <input type="text" name="nombre" placeholder="Digite su nombre">
                    </div>
                    <div class="group">   
                        <label for="form_input_2">Apellido</label>
                        <input type="text" name="apellido" placeholder="Digite su apellido">
                    </div>
                    <div class="group">   
                        <label for="form_input_2">Cedula</label>
                        <input type="text" name="cedula" placeholder="Digite su cedula">
                    </div>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
                <div class="solucion">
                    <?php
                        mostrar_datos();
                    ?>
                </div>
            </div>
        
            <div class="illustration">
                <img src="sources/pngegg.png" alt="">
            </div>
        </div>
    </section>
    <script src="js/componentes.js"></script>
</body>
</html>

