$(document).ready(function(){
  $("h2").click(function(){
    $("p").removeClass("testt");
  });
});
$(document).ready(function(){
    $("#Em").click(function(){
        $("#ttest").html("<form action='Conexion.php' method='post' class='form-register'><h2 class='form__titulo'>CREA UN REGISTRO</h2> <div class='contenedor-inputs'> <input type='text' name='anio' placeholder='Año' class='input-48' required><input type='text' name='mes' placeholder='Mes' class='input-48' required><input type='text' name='centro_zonal' placeholder='Centro zonal' class='input-100' required><input type='text' name='motivo_de_ingreso' placeholder='Motivo de ingreso' class='input-48' required><input type='text' name='sexo' placeholder='Sexo' class='input-48' required><input type='text' name='rango_edad' placeholder='Rango de edad' class='input-48' required><input type='text' name='grupo_etnico' placeholder='Grupo Etnico' class='input-100' required> <input type='text' name='nacionalidad' placeholder='nacionalidad' class='input-100' required><input type='text' name='cantidad_procesos' placeholder='Cantidad de procesos' class='input-100' required><input type='text'  name='regional' placeholder='Region' class='input-100' required>  <input type='submit' value='Registrar' class='btn-enviar' required></form></div>");
    });
});

