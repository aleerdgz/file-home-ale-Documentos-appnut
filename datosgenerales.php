<?php
$servidor= "localhost";
$usuario="root";
$clave="":
$baseDeDatos="consultas";

$enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
if(!$enlace){ echo "errror en la conexion con el servidor";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Ccompatible" content="ie-edge">
<title>Alenut</title>
<link rel="stylesheet" href="file:///home/ale/Documentos/cursoweb/Bootstraps5/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bitter&family=Koulen&display=swap" rel="stylesheet">
<link rel="stylesheet" href="file:///home/ale/Documentos/appnut/appnut.css">
</head>
<body>
<nav>
  <div class="container_consulta">
    <div class="row">
      <ul class="col">
        <li class="consulta">
          <a href="file:///home/ale/Documentos/appnut/Datosgenerales.html">Datos Generales</a>
        </li>
        <li class="consulta">
          <a href="file:///home/ale/Documentos/appnut/Historia_medica.html">Historia medica</a>
        </li>
        <li class="consulta">
          <a href="file:///home/ale/Documentos/appnut/historia_Nutricional.html">Historia Nutricional</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="Titulo nom">
  <div class="row">
    <div class="col-12 col-md-6">
      <h2 class="display-5">Datos generales</h2>
    </div>
  </div>
</div>
<hr>
<br>
<div class="container_Formulario">
  <div class="row my-5">
    <div class="Col">
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col-4 col-md-3 mb-3">
            <label for="Nombre_paciente" class="form-label" >Nombre de Paciente </label>
            <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Nombre y apellidos" name="nombre" value="">
          </div>
         <div class="col-4 col-md-3">
          <label for="Fecha_de_nacimiento" class="form-label">Fecha de nacimiento</label>
          <input type="number" class="form-control" id="Fecha_de_nacimiento" placeholder="Dia" name="nacimiento" value="">
          <select class="form-select" id="mes" name="Mes">
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
          </select>
          <input type="number" class="form-control" id="Fecha_de_nacimiento" placeholder="Año" name="nacimiento" value="">
         </div>
          <div class="col-4 col-md-3 mb-3">
            <label for="Numero_de_telefono" class="form-label">Numero de Telefono</label>
            <input type="text" class="form-control" id="Numero_de_telefono" placeholder="Numero de Telefono" name="Telefono" value="">
          </div>
          <div class="col-4 col-md-3 mb-3">
            <label for="Correo_electronico" class="form-label">Correo electronico</label>
            <input type="text" class="form-control" id="Correo_electronico" placeholder="Correo electronico" name="correo"cvalue="">
          </div>
        </div>
        <br>
        <br>
        <div class="row">
          <div class="col-4 col-md-3 mb-3">
            <label for="Pais_de_residencia" class="form-label">Pais de residencia</label>
            <input type="text" class="form-control" id="pais" placeholder="Pais de residencia" name="pais"value="">
           </div>
           <div class="col-4 col-md-3 mb-3">
            <label for="Departamento_que_reside" class="form-label">Departamento que reside</label>
          <select class="Departamento" name="Departamento">
            <option value="Santa Ana">Santa Ana</option>
            <option value="Ahuachapan">Ahuachapan</option>
            <option value="Sonsonate">Sonsonate</option>
            <option value="La Libertad">La Libertad</option>
            <option value="San Salvador">San Salvador</option>
            <option value="Chalatenango">Chalatenango</option>
            <option value="Cuscatlan">Cuscatlan</option>
            <option value="La Paz">La Paz</option>
            <option value="San Vicente">San Vicente</option>
            <option value="Usulutan">Usulutan</option>
            <option value="Cabañas">Cabañas</option>
            <option value="Morazan">Morazan</option>
            <option value="San Miguel">San Miguel</option>
            <option value="La Union">La Union</option>
          </select>
           </div>
           <div class="col-4 col-md-3 md-3">
              <label for="Domicilio" class="form-label">Domicilio</label>
              <input type="text" class="form-control" id="Domicilio" placeholder="Domicilio" name="Domicilio" value="">
           </div>
           <div class="col-4 col-md-3 md-3">
              <label for="Ocupación"class="form-label">Ocupación</label>
              <input type="text" class="form-control" id="Ocupacion" placeholder="Ocupación" name="Ocupacion" value="">
           </div>
        </div>
        <br>
        <br>

        <div class="row">
          <div class="col-4 col-md-3 md-3">
            <label for="Horas_laborales" class="form-label" >Horas laborales</label>
            <input type="text"  class="form-control" id="Horas_laborales" placeholder="Horas laborales" name="" value="">
          </div>
          <div class="col-4 col-md-3 md-3">
              <label for="Hijos" class="form-label">Numero de Hijos</label>
              <input type="text" class="form-control" id="Hijos" placeholder="Hijos"  value="">
          </div>
        </div>
        <br>
        <br>
       </form>
   </div>
 </div>
</div>
<hr>
<div class="Titulo2 nom">
  <div class="row">
    <div class="col-12 col-md-6">
      <h2 class="display-5"> Datos Socioeconomicos</h2>
    </div>
  </div>
</div>
<hr>
<br><br>
<div class="container_forms2">
  <div class="row">
    <div class="col-12">
      <form class="" action="index.html" method="post">
        <div class="row">
          <div class="col-4 col-md-4">
            <label for="Ingresos_Mensuales" class="form-label">Ingresos Mensuales</label>
            <input type="text" class="form-control" id="Ingresos_Mensuales" name="" value="">
          </div>
          <div class="col-4 col-md-4">
            <label for="Gasto_semanal_en_alimentacion" class="form-label">Gasto Semanal en alimentación</label>
            <input type="text" class="form-control" id="Gasto_semanal_en_alimentacion" name="" value="">
          </div>
          <div class="col-4 col-md-4">
            <label for="Servicios_basicos">Acceso a servicios:</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="Servicios_basicos" id="Energia" value="">
              <label for="Energia" class="form-check-label">Energia</label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="Familiares_con" id="Agua_potable" value="">
              <label for="Agua_potable" class="form-check-label">Agua potable</label>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
      <script src="file:///home/ale/Documentos/cursoweb/Bootstraps5/js/bootstrap.bundle.min.js" charset="utf-8"></script>
      </body>
      </html>
      <?php
      if(isset($_POST['registrarse'])){
      $Nombre=$_POST["nombre"];
      $Correo=$_POST["correo"];
      $sexo=$_POST["sexo"];
      $id= rand(1;99);
      }
      $insertarDatos="INSERT INTO datos VALUES('$nombre', '$correo', '$sexo', '$id')";
      $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);
      if (!ejecutarInsertar) {
        echo"error en l alinea de sql";
      }
      ?>
