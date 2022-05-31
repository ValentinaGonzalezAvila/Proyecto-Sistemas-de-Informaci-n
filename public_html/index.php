<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_base";
$password = ")Js#)G%$HTOr#!8]";
$conn = new mysqli($serverName, $username, $password,"id17908676_baseabandono");
?>
<html lang="es">
<link rel="stylesheet" href = "CSS/bootstrap.min.css">
<link rel="stylesheet" href = "CSS/Styles.css">
<head>
    <title>Motivo de Ingreso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

<div class="container">
  <h1 class='form__tvisualizar'>MOTIVOS DE INGRESO</h1>


  <nav  class=" text-white bg-dark navbar navbar-expand-sm navbar-light bg-light">
    <div class=" text-white collapse navbar-collapse" id="navbarNav">
      <ul class="text-white navbar-nav">
        <li class="text-white nav-item">
          <a class="text-white nav-link"  href="index.php">&#x1F4CA;FORMULARIOS</a>
          </li>
        <li class="text-white nav-item">
          <a class="text-white nav-link" href="Vista.php">&#x1F4CA;DATOS REGISTRADOS</a>
        </li>
        </ul>
  </div>
  </nav>



<div class="contenido">

<br>

<h1>Bienvenido </h1>
<center>
<img src="https://www.coopmultiflor.com/wp-content/uploads/2018/08/icbf.jpg" align="center"">
</center>
<h4>En esta página podrás encontrar información relacionada con el ICBF, formularios para reportar un ingreso a un centro de servicio y datos relevantes acerca de esta nueva iniciativa. </h4>

<p> <br>El Instituto Colombiano de Bienestar Familiar (ICBF) es la entidad del Estado colombiano que trabaja por la prevención y protección integral de la primera infancia, y adolescencia, el fortalecimiento de los jóvenes y las familias en Colombia, brindando atención especialmente a aquellos en condiciones de amenaza, inobservancia o vulneración de sus derechos Para este proyecto los datos recolectados son del El Instituto Colombiano de Bienestar Familiar (ICBF) en el cual se quiere analizar los casos de abandono en niños y jovenes. </p>




    <div class="col">
    <center>
          <ul class="menu">
              <li><button type="button" id="Em" class="btn btn-outline-success">Nuevo registro</button></li>
              
          </ul>
    <div id ="ttest"></div>
</div>
</div>

<br>

  <footer>
  </footer>
  </div>


    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="Script.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    </body>
    </head>
</html>
