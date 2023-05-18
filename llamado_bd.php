<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style_bd.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a77799d92d.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Solucion taller backend</title>
</head>

<body>
  <nav-lateral>
  </nav-lateral>
  <section>
    <div class="superior">
      <div class="titulo">
        <h1>Solucion taller Backend - Taller 6</h1>
        <p>Según lo visto en el módulo de Backend basado en proyectos, conteste las siguientes preguntas de opción
          múltiple, en donde se evidencien los conocimientos de PHP, sentencias, variables, formularios, envío de datos,
          métodos POST y GET, entre otros.</p>
      </div>
      <div class="descripcion">
      </div>
    </div>
    <div id="section-respuestas">
      <div id="captura_datos">
        <h1>Insercion y mostrar BD</h1>
        <!--El action lleva el formulario al archivo almacenar.php-->
        <form action="procesos_back/almacenar.php" method="POST">
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
          <div class="group">
            <label for="form_input_2">Edad</label>
            <input type="number" name="edad" placeholder="Digite su edad">
          </div>
          <button type="submit" name="almacenar">Almacenar</button>
        </form>
      </div>
      <div class="solucion">
        <div class="wrapper">
          <div class="container">
            <div class="filter">
              <div class="row">
                <div class="col-sm-4">
                  <div class="show-row">
                    <select class="form-control">
                      <option value="5" selected="selected">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                  <div class="search-row">
                    <input type="text" name="search" class="form-control" placeholder="Enter your keyword">
                  </div>
                </div>
              </div>
            </div>
            <table id="music" class="table table-responsive table-hover">
              <thead>
                <tr class="myHead">
                  <th>#</th>
                  <th>id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cedula</th>
                  <th>Edad</th>
                </tr>
              </thead>
              <tbody>

                <?PHP
                  include 'procesos_back/calculos.php';
                  mostrar_bd();
                ?>

              </tbody>
            </table>
            <div class="text-center controller">
              <ul class="pagination"></ul>
              <ul class="pager">
                <li><a href="javascript:void(0)" class="prev">Previous</a></li>
                <li><a href="javascript:void(0)" class="next">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/componentes.js"></script>
  <script src="js/app.js"></script>
</body>

</html>