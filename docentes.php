<?php
  session_start();
  include 'serv.php';
  if(!isset($_SESSION['veri_code'], $_SESSION["nombre_docente"], $_SESSION["id_docente"])){
  echo '<script> window.location="indexdocentes.php"; </script>';
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Administracion de calificaciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
<input type="button" value="Cerrar Sesion" class="btn btn-warning" style="float: " OnClick="location.href='logout.php'"><br>
<div class="tit2">ID: <?php echo $_SESSION["id_docente"]?></div>

<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<div id="myCarousel" class="carousel slide homCar">
    <div class="carousel-inner" style="border-top:18px solid #222; border-bottom:0px solid #222; border-radius:4px;">
      <div class="item active">
      <img src="images/ING-TICs.png" alt="#" style="min-height:250px; min-width:100%"/>
      </div>
<body background="images/Fonfo3.png" style="background-repeat:no-repeat; background-size:cover" onLoad="show3()">

    <center><div class="tit"><h2 style="color: #000000;">Bienvenido <?php echo $_SESSION["nombre_docente"] ?></h2></center>

  <div id="reloj" style="float:left; font-size:22px;"><script type="text/javascript">
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}
</script>
</div>
<div style="float:right; font-size:22px;">
<script type="text/javascript">
//<![CDATA[
var  today = new Date();
var m = today.getMonth() + 1;
var mes = (m < 10) ? '0' + m : m;
  document.write('Fecha: '+today.getDate(),'/' +mes,'/'+today.getYear());
//]]> 
</script></div>

<h2><br>
<?php 
$query = 'SELECT m.id_materia, m.nombre_materia FROM materias m
          INNER JOIN materia_docente mD ON m.id_materia = mD.id_materia
          WHERE mD.id_docente = '.$_SESSION['id_docente'].';';
$result = mysqli_query($connect, $query);
echo ('
<center><button data-toggle="collapse" data-target="#demo">Seleccione su materia</button>
<div id="demo" class="collapse">
');
foreach ($result as $key => $value) {

echo('<a href="grupos_lista.php"><input type="button" class="btn btn-warning" name="materia['.$value["id_materia"].']" value=" '.$value["nombre_materia"].' " style="width:35%; height:33px; font-size: 16px"></a>');


}
echo('</h2></center> 
</div>');
 ?>

<!-- Footer
      ================================================== -->

    
  </style>
  </body>
</html>