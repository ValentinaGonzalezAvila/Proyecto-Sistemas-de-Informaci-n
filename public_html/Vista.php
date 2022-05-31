<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_base";
$password = "RetoPostobon|21";
$mysqli = mysqli_connect($serverName, $username, $password, "id17908676_baseabandono");
?>
<html lang="es">
<link rel="stylesheet" href = "CSS/bootstrap.min.css">
<link rel="stylesheet" href = "CSS/StylesV.css">
<head>
    <title>Abandonos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
    <body>

    <div class="container">
      <h1 class='form__tvisualizar'>BASE ICBF</h1>


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

	<center>

  <div class="contenido">

  <br>

  <h1>Información abandonos</h1>

  <table class="table">
  <thead>
    <tr>
      <th >Año</th>
      <th >Mes</th>
      <th >Región</th>
      <th >Centro Zonal</th>
      <th >Motivo de ingreso</th>
      <th >Cantidad de procesos</th>
    </tr>
  </thead>

<h1>Dashboard </h1>

  <tbody>
    <?php
      $sql = "SELECT año, mes, regional, centro_zonal, motivo_de_ingreso, cantidad_procesos FROM baseadmin order by año desc LIMIT 10";
      $result = mysqli_query($mysqli, $sql);
      while ($row=mysqli_fetch_array($result)) {
    ?>
      <tr>
          <td><?=$row[0]?></td>
          <td><?=$row[1]?></td>
          <td><?=$row[2]?></td>
          <td><?=$row[3]?></td>
          <td><?=$row[4]?></td>
          <td><?=$row[5]?></td>
      </tr>
    <?php
      }
    ?>
  </tbody>
</table>


	<br></br>
  <br></br>

  <div class="powerbi_container">
    <iframe class="powerbi" src="https://app.powerbi.com/view?r=eyJrIjoiODg3Zjg1YTQtYjI5Ni00YjdkLThhYTMtMzExYTdiMzM2NjNiIiwidCI6ImMwNmZiNTU5LTFiNjgtNGI4NC1hMTRmLTQ3ZDBkODM3YTVhYiIsImMiOjR9"></iframe>
  </div>

    </div>
	</div>







    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="Script.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    </body>
    </head>
    <center>
  <footer >

  </footer>
  </center>
</html>
