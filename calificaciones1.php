<?php
  session_start();
  include 'serv.php';
  if(isset($_SESSION['usuario'])){
  echo '<script> window.location="docentes.php"; </script>';
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Administracion de calificaciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
<input type="button" value="Cerrar Sesion" class="btn btn-warning" OnClick="location.href='logout.php'">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
</header>
<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:0px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/ING-TICs.png" alt="#" style="min-height:250px; min-width:100%"/>
		  </div>
		  <center><h1>Administracion de redes</h1></center>
<script>
var mydate=new Date();
var year=mydate.getYear();
if (year < 1000)
year+=1900;
var day=mydate.getDay();
var month=mydate.getMonth()+1;
if (month<10)
month="0"+month;
var daym=mydate.getDate();
if (daym<10)
daym="0"+daym;
document.write("<big><font color='000000' face='Arial'><b>"+daym+"/"+month+"/"+year+"</b></font></big>")
</script>
<!-- -->
<form method="post" action="insertar.php"><br>
  <div id="tabla">
    <table align="center" width="200%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
        <tr>
          <td align="center" bgcolor="orange"><strong>Nombre del alumno</strong></td>
        </tr>
      <tr>
        <td align="center">Jesus Avendaño Hernández</td>
      </tr>
    </table>
  </div>
    <div id="tabla"><table align="center" width="200%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
      <tr>
        <td align="center" bgcolor="orange"><strong>Unidad 1</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 2</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 3</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 4</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 5</strong></td>
      </tr>
      <tr>
        <td align="center" bgcolor="white"><input type="number" name="alumno{1}[]" id="1" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{1}[]" id="1" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{1}[]" id="1" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{1}[]" id="1" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{1}[]" id="1" class="form-input" style='width:28%; height:18px;' /></td>
      </tr>
     </table>
 </div>
 <br><p align="center"><strong>Nota: En caso de que solo vaya a agregar calificaciones a una sola unidad, agregue un 0 a las demas. En caso contrario, rellene todos los campos.</strong></p><br>
 <!-- -->
  <div id="tabla">
    <table align="center" width="200%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
        <tr>
          <td align="center" bgcolor="orange"><strong>Nombre del alumno</strong></td>
        </tr>
      <tr>
        <td align="center">Kevin Cruz Chaga</td>
      </tr>
    </table>
  </div>
    <div id="tabla"><table align="center" width="200%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
      <tr>
        <td align="center" bgcolor="orange"><strong>Unidad 1</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 2</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 3</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 4</strong></td>
        <td align="center" bgcolor="orange"><strong>Unidad 5</strong></td>
      </tr>
      <tr>
        <td align="center" bgcolor="white"><input type="number" name="alumno{2}[]" id="2" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{2}[]" id="2" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{2}[]" id="2" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{2}[]" id="2" class="form-input" style='width:28%; height:18px;' /></td>
        <td align="center" bgcolor="white"><input type="number" name="alumno{2}[]" id="2" class="form-input" style='width:28%; height:18px;' /></td>
      </tr>
     </table>
 </div>
 <br><p align="center"><strong>Nota: En caso de que solo vaya a agregar calificaciones a una sola unidad, agregue un 0 a las demas. En caso contrario, rellene todos los campos.</strong></p><br>
 <!-- -->
    <div><br><br><center><input type="submit" class="btn btn-primary" value="Ingresar datos" style='width:35%; height:30px;'OnClick="location.href='insertar.php'">
    </center>
    </div><br><br>
    
    
</form>  
    <br><div><center><input type="button" class="btn btn-warning" value="Regresar" style='width:35%; height:30px;'OnClick="location.href='docentes.php'">
    
    </center>
    </div>

	</style>
  </body>
</html>