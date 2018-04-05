<?php
  session_start();
  include 'serv.php';
  if(isset($_SESSION['usuario'])){
  echo '<script> window.location="docentes.php"; </script>';
  }
?>
<!DOCTYPE html>
<html lang="es-MX">
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
		  <center><h1>Reingenieria de software</h1></center>


<!-- -->
<form method="post" action="insertar_calificaciones_4.php"><br>
  <?php
// Sentencia de vinculación entre tablas.
$query = 'SELECT u.id_alumno, u.nombre_alumno FROM usuarios u 
          INNER JOIN materia_alumno mA ON u.id_alumno = mA.id_alumno 
          INNER JOIN materia_docente mD ON mD.clave_materia LIKE mA.clave_materia
          WHERE mD.clave_materia = "ISF-1603"';
$result = mysqli_query($connect,$query);
// Generación dinámica por cada alumno en esa clase.
foreach ($result as $key => $value) {
  // echo $value['nombre_alumno'];
  echo ('<div id="tabla">
  <table align="center" width="200%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10">
    <tr>
      <td align="center" bgcolor="orange"><strong>Nombre del alumno</strong></td>
    </tr>
  <tr>
    <td align="center">'.$value['nombre_alumno'].'</td>
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
    <td align="center" bgcolor="orange"><strong>Unidad 6</strong></td>
  </tr>
  <tr>
    <td align="center" bgcolor="white"><input type="number" name="alumno['.$value['id_alumno'].'][]" id="unidad1" class="form-input" style="width:28%; height:18px;" /></td>
    <td align="center" bgcolor="white"><input type="number" name="alumno['.$value['id_alumno'].'][]" id="unidad2" class="form-input" style="width:28%; height:18px;" /></td>
    <td align="center" bgcolor="white"><input type="number" name="alumno['.$value['id_alumno'].'][]" id="unidad3" class="form-input" style="width:28%; height:18px;" /></td>
    <td align="center" bgcolor="white"><input type="number" name="alumno['.$value['id_alumno'].'][]" id="unidad4" class="form-input" style="width:28%; height:18px;" /></td>
    <td align="center" bgcolor="white"><input type="number" name="alumno['.$value['id_alumno'].'][]" id="unidad5" class="form-input" style="width:28%; height:18px;" /></td>
    <td align="center" bgcolor="white"><input type="number" name="alumno['.$value['id_alumno'].'][]" id="unidad6" class="form-input" style="width:28%; height:18px;" /></td>
  </tr>
  </table>
</div>
<br><p align="center"><strong>Nota: En caso de que solo vaya a agregar calificaciones a una sola unidad, agregue un 0 a las demas. En caso contrario, rellene todos los campos.</strong></p><br>
  ');
  // $_POST['alumno']			[id_alumno]									[calificacion]
  //	A- esta es la variable, 	A-esto es el id del alumno en número y 		A- esta es la posicion de la calificacion (numero de la unidad -1)
  // por ejemplo para ti que tienes la id_alumno 10 :  $_POST['alumno'][10][3]  : en los arreglos se empieza siempre en 0, por eso numero de la unidad -1, esto es
  // si la calificacion de la unidad 3, entonces seria 3-1=2, estaria en la posicion 2
  // Array multidimencional

  // name = " variable['indice'][] "
  // variable es la que aparece en el $_post y las demas son los indices del arreglo

}
?>
    <div><br><br><center><input type="submit" class="btn btn-primary" value="Ingresar datos" style='width:35%; height:30px;'OnClick="location.href='insertar_calificaciones_1.php'">
    </center>
    </div><br><br>
    
    
</form>  
    <br><div><center><input type="button" class="btn btn-warning" value="Regresar" style='width:35%; height:30px;'OnClick="location.href='docentes.php'">
    
    </center>
    </div>


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
  </body>
</html>