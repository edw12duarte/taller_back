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
                <h1>Calculadora</h1>
                <form action="" method="POST">
                    <div class="group">   
                        <label for="form_input_1">Numero 1</label>
                        <input type="number" name="n1" placeholder="Digite numero 1">
                    </div>
                    <div class="group">   
                        <label for="form_input_2">Numero 2</label>
                        <input type="number" name="n2" placeholder="Digite numero 2">
                    </div>
                    <div class="group">
                        <label for="select_operation">Seleccione operación</label>
                        <select name="tipo" id="select_operation">
                            <option value="1">Suma</option>
                            <option value="2">Resta</option>
                            <option value="3">Multiplicacion</option>
                            <option value="4">Division</option>
                        </select>
                    </div>
                    <button type="submit" name="operar">Operar</button>
                </form>
                <div class="solucion">
                    <?php
                        calculadora_app();
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

